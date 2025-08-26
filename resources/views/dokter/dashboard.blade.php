<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Dokter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Statistik Diagnosa Penyakit (12 Bulan Terakhir)</h3>
                    
                    {{-- Canvas untuk menampung grafik --}}
                    <div>
                        <canvas id="diseaseChart"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Script untuk Chart.js --}}
    @push('scripts')
        {{-- Load library Chart.js dari CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const ctx = document.getElementById('diseaseChart').getContext('2d');
                
                // Ambil data yang sudah kita siapkan dari controller
                const chartData = {!! $chartData !!};

                new Chart(ctx, {
                    type: 'bar', // Tipe grafik bar
                    data: chartData,
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Jumlah Diagnosa per Bulan'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    // Pastikan sumbu Y hanya menampilkan angka bulat
                                    stepSize: 1
                                }
                            }
                        }
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>