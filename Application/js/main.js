document.addEventListener('DOMContentLoaded', () => {
    // Foglalás - loadMachines, loadAvailableTimes, és form submission
    if (document.getElementById('reservation-form')) {
        async function loadMachines() {
            const response = await fetch('../api/get_machines.php');
            const machines = await response.json();
            const select = document.getElementById('machine_id');
            select.innerHTML = '';
            machines.forEach(machine => {
                const option = document.createElement('option');
                option.value = machine.id;
                option.textContent = machine.name;
                select.appendChild(option);
            });
            if (machines.length > 0) {
                loadAvailableTimes(machines[0].id, document.getElementById('date').value);
            }
        }

        async function loadAvailableTimes(machineId, date) {
            const response = await fetch(`../api/get_available_times.php?machine_id=${machineId}&date=${date}`);
            const result = await response.json();
            const select = document.getElementById('start_time');
            select.innerHTML = '';
            if (result.success) {
                result.available_times.forEach(time => {
                    const option = document.createElement('option');
                    option.value = time;
                    option.textContent = new Date(time).toLocaleString();
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option>Nincs szabad időpont.</option>';
            }
        }

        document.getElementById('machine_id')?.addEventListener('change', () => {
            const machineId = document.getElementById('machine_id').value;
            const date = document.getElementById('date').value;
            loadAvailableTimes(machineId, date);
        });

        document.getElementById('date')?.addEventListener('change', () => {
            const machineId = document.getElementById('machine_id').value;
            const date = document.getElementById('date').value;
            loadAvailableTimes(machineId, date);
        });

        document.getElementById('reservation-form')?.addEventListener('submit', async function (e) {
            e.preventDefault();
            const submitButton = e.target.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            const formData = new FormData(e.target);
            try {
                const response = await fetch('../api/create_reservation.php', {
                    method: 'POST',
                    body: formData
                });
                const result = await response.json();
                document.getElementById('response-message').textContent = result.message;
                if (result.success) {
                    const machineId = document.getElementById('machine_id').value;
                    const date = document.getElementById('date').value;
                    await loadAvailableTimes(machineId, date);
                }
            } catch {
                document.getElementById('response-message').textContent = 'Hiba történt a foglalás során.';
            } finally {
                submitButton.disabled = false;
            }
        });

        loadMachines();
    }

       // Bejelentkezés
       if (document.getElementById('login-form')) {
        document.getElementById('login-form').addEventListener('submit', async function (e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('../api/authenticate.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            document.getElementById('response-message').textContent = result.message;
            if (result.success) {
                window.location.href = 'index.php';
            }
        });
    }
    
    // Regisztráció
    if (document.getElementById('register-form')) {
        document.getElementById('register-form').addEventListener('submit', async function (e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('../api/register_user.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            document.getElementById('response-message').textContent = result.message;
            if (result.success) {
                window.location.href = 'success.php';
            }
        });
    }

    // Mosógépek lista
    if (document.getElementById('machines-container')) {
        async function loadMachines() {
            const response = await fetch('../api/get_machines.php');
            const machines = await response.json();
            const container = document.getElementById('machines-container');
            container.innerHTML = '';
            machines.forEach(machine => {
                const machineDiv = document.createElement('div');
                machineDiv.className = 'machine';
                machineDiv.innerHTML = `
                    <h2>${machine.name}</h2>
                    <div class="reservations">
                        <h3>Foglalások:</h3>
                        ${machine.reservations.length > 0
                            ? machine.reservations.map(res => `
                                <p>${new Date(res.start_time).toLocaleString()} - 
                                   ${new Date(res.end_time).toLocaleString()}</p>
                            `).join('')
                            : '<p>Nincsenek foglalások.</p>'}
                    </div>
                `;
                container.appendChild(machineDiv);
            });
        }

        loadMachines();
    }


});