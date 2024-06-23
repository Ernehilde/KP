<x-app-layout>
    <div class="h3 ml-5 fw-bold mb-3 underline">Dashboard</div>

        <div class="container">
            <div class="row ">
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-dot-circle"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Ban Luar 17</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalbl17}}</p>
                                    <p class="h4 mb-0 ms-2">Buah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-dot-circle"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Ban Luar 12</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalbl12}}</p>
                                    <p class="h4 mb-0 ms-2">Buah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="far fa-dot-circle"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Ban Dalem</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalbd}}</p>
                                    <p class="h4 mb-0 ms-2">Buah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Aki</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalAki}}</p>
                                    <p class="h4 mb-0 ms-2">Buah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-hdd"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Karbu</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalkrb}}</p>
                                    <p class="h4 mb-0 ms-2">Buah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-prescription-bottle"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Oli</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalOli}}</p>
                                    <p class="h4 mb-0 ms-2">Botol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-wine-bottle"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Botol</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalBotol}}</p>
                                    <p class="h4 mb-0 ms-2">Botol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-cube"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Jumlah Kardus</h5>
                            </div>
                            <div class="row">
                                <div class="col d-flex align-items-center">
                                    <p class="h1 fw-bold">{{$totalkardus}}</p>
                                    <p class="h4 mb-0 ms-2">Kardus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
