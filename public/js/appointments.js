document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        height: '100%',
        expandRows: true,
        initialView: 'timeGridWeek',
        events: "/appointments/load",
        allDaySlot: false,
        slotMinTime: '08:00:00',
        slotMaxTime: '19:00:00',
        slotDuration: '00:30',
        showNonCurrentDates: false,
        businessHours: [
            {
                daysOfWeek: [ 1, 2, 3, 4, 5, 6, 7 ],
                startTime: '08:00',
                endTime: '13:00'
            },
            {
                daysOfWeek: [ 1, 2, 3, 4, 5, 6, 7 ],
                startTime: '14:00',
                endTime: '19:00'
            }
        ],
        dateClick: async function(info) {
            if (typeof canInteract !== 'undefined' && canInteract === false) return;
            if (info.date.getHours() === 13) return;
            const apiUrl = `/doctors/available?date=${info.dateStr}`;
            const apiResponse = await fetch(apiUrl).then(response => response.json());

            var html = '<div class="row">';
            apiResponse.forEach(doctor => {
                html += `
                    <div class="col-md-6 col-xl-6">
                        <div class="card hover-md" onclick="setAppointment('${info.dateStr}', ${doctor.id}, '${doctor.name}')">
                            <div class="card-block">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-auto">
                                        <img class="img-fluid rounded-circle" style="width:80px;" src="/img/pictures/${doctor.image}" alt="doctor">
                                    </div>
                                    <div class="col">
                                        <h5>${doctor.name}</h5>
                                        <span>${doctor.specialty ?? 'Geral'}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            html += '</div>';

            Swal.fire({
                title: `Médicos disponíveis:`,
                html: html,
                width: '80%',
                showConfirmButton: false,
                showCloseButton: true
            });
        },
    });
    calendar.render();
});

function setAppointment(date, doctorId, doctorName) {
    Swal.close();
    Swal.fire({
        title: 'Are you sure?',
        text: `Schedule an appointment with ${doctorName}?`,
        icon: 'warning',
        showCancelButton: true,
        customClass: {
            confirmButton: 'btn btn-outline-success',
            cancelButton: 'btn btn-outline-danger'
        },
        buttonsStyling: false,
        confirmButtonText: 'Yes, you can schedule!',
        cancelButtonText: 'cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $('#send_date').val(date);
            $('#send_doctor').val(doctorId);
            $('#send_form').submit();
        }
    });
}
