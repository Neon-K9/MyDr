@extends('layouts.app')

@section('title', '| Appointments')
@section('sidebar_doctors', 'active')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Doctor</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('doctors.index') }}">Doctor</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Doctor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card User-Activity">
                                        <div class="card-header">
                                            <h5>Schedule your appointment</h5>
                                        </div>
                                        <div class="card-block pb-5" style="height: 700px;">
                                            <div class="row align-items-center justify-content-center mb-4">
                                                <div class="col-auto">
                                                    <img class="img-fluid rounded-circle" style="width:80px;" src="/img/pictures/{{ $doctor->image }}" alt="doctor">
                                                </div>
                                                <div class="col">
                                                    <h5>{{ $doctor->name }}</h5>
                                                    <span>{{ $doctor->doctor->specialty ?? 'Geral' }}</span>
                                                </div>
                                            </div>
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id='send_form' action='{{ route('appointments.store') }}' method='POST' style='display:none'>
        {{ csrf_field() }}
        <input id='send_date' type='hidden' name='date' value=''>
        <input id='send_doctor' type='hidden' name='doctor' value='{{ $doctor->id }}'>
    </form>
    <script src="{{ asset('plugins/fullcalendar/main.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/locales-all.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 'calc(100% - 80px)',
                expandRows: true,
                initialView: 'timeGridWeek',
                events: "{{ route('appointments.doctor.load', ['id' => $doctor->id]) }}",
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
                    if (info.date.getHours() === 13) return;

                    Swal.fire({
                        title: 'Are you sure?',
                        text: `Schedule an appointment with {{ $doctor->name }}?`,
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
                            $('#send_date').val(info.dateStr);
                            $('#send_form').submit();
                        }
                    });
                },
            });
            calendar.render();
        });
    </script>
    <!-- [ Main Content ] end -->
@endsection
