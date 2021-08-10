@extends('layouts.admin')
@section('title', 'Bảng điều khiển')
@section('main_content')
    <div class="container-fluid">
        <div class="layout-specing">
            <h5 class="mb-0">Bảng điều khiển</h5>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-bed h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">558</h5>
                                <p class="text-muted mb-0">Cửa hàng</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-file-medical-alt h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">$2164</h5>
                                <p class="text-muted mb-0">Thể loại</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-social-distancing h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">112</h5>
                                <p class="text-muted mb-0">Món ăn</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-ambulance h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">16</h5>
                                <p class="text-muted mb-0">Đơn hàng</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-->

                {{--            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">--}}
                {{--                <div class="card features feature-primary rounded border-0 shadow p-4">--}}
                {{--                    <div class="d-flex align-items-center">--}}
                {{--                        <div class="icon text-center rounded-md">--}}
                {{--                            <i class="uil uil-medkit h3 mb-0"></i>--}}
                {{--                        </div>--}}
                {{--                        <div class="flex-1 ms-2">--}}
                {{--                            <h5 class="mb-0">220</h5>--}}
                {{--                            <p class="text-muted mb-0">Appointment</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div><!--end col-->--}}

                {{--            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">--}}
                {{--                <div class="card features feature-primary rounded border-0 shadow p-4">--}}
                {{--                    <div class="d-flex align-items-center">--}}
                {{--                        <div class="icon text-center rounded-md">--}}
                {{--                            <i class="uil uil-medical-drip h3 mb-0"></i>--}}
                {{--                        </div>--}}
                {{--                        <div class="flex-1 ms-2">--}}
                {{--                            <h5 class="mb-0">10</h5>--}}
                {{--                            <p class="text-muted mb-0">Operations</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div><!--end col-->--}}
            </div><!--end row-->


            {{--        biểu đồ--}}


            {{--        <div class="row">--}}
            {{--            <div class="col-xl-8 col-lg-7 mt-4">--}}
            {{--                <div class="card shadow border-0 p-4">--}}
            {{--                    <div class="d-flex justify-content-between align-items-center mb-3">--}}
            {{--                        <h6 class="align-items-center mb-0">Patients visit by Gender</h6>--}}

            {{--                        <div class="mb-0 position-relative">--}}
            {{--                            <select class="form-select form-control" id="yearchart">--}}
            {{--                                <option selected="">2020</option>--}}
            {{--                                <option value="2019">2019</option>--}}
            {{--                                <option value="2018">2018</option>--}}
            {{--                            </select>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div id="dashboard" class="apex-chart" style="min-height: 365px;"><div id="apexchartsnx7gl90l" class="apexcharts-canvas apexchartsnx7gl90l apexcharts-theme-light" style="width: 938px; height: 350px;"><svg id="SvgjsSvg5769" width="938" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="938" height="350"><div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" rel="1" seriesname="Male" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(57, 108, 240) !important; color: rgb(57, 108, 240); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Male" data:collapsed="false" style="color: rgb(55, 61, 63); fonts-size: 12px; fonts-weight: 400; fonts-family: Helvetica, Arial, sans-serif;">Male</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Female" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(83, 199, 151) !important; color: rgb(83, 199, 151); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Female" data:collapsed="false" style="color: rgb(55, 61, 63); fonts-size: 12px; fonts-weight: 400; fonts-family: Helvetica, Arial, sans-serif;">Female</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Children" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(241, 181, 97) !important; color: rgb(241, 181, 97); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Children" data:collapsed="false" style="color: rgb(55, 61, 63); fonts-size: 12px; fonts-weight: 400; fonts-family: Helvetica, Arial, sans-serif;">Children</span></div></div><style type="text/css">--}}

            {{--                                        .apexcharts-legend {--}}
            {{--                                            display: flex;--}}
            {{--                                            overflow: auto;--}}
            {{--                                            padding: 0 10px;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {--}}
            {{--                                            flex-wrap: wrap--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-right, .apexcharts-legend.position-left {--}}
            {{--                                            flex-direction: column;--}}
            {{--                                            bottom: 0;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {--}}
            {{--                                            justify-content: flex-start;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {--}}
            {{--                                            justify-content: center;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {--}}
            {{--                                            justify-content: flex-end;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend-series {--}}
            {{--                                            cursor: pointer;--}}
            {{--                                            line-height: normal;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{--}}
            {{--                                            display: flex;--}}
            {{--                                            align-items: center;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend-text {--}}
            {{--                                            position: relative;--}}
            {{--                                            fonts-size: 14px;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend-text *, .apexcharts-legend-marker * {--}}
            {{--                                            pointer-events: none;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend-marker {--}}
            {{--                                            position: relative;--}}
            {{--                                            display: inline-block;--}}
            {{--                                            cursor: pointer;--}}
            {{--                                            margin-right: 3px;--}}
            {{--                                            border-style: solid;--}}
            {{--                                        }--}}

            {{--                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{--}}
            {{--                                            display: inline-block;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend-series.apexcharts-no-click {--}}
            {{--                                            cursor: auto;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {--}}
            {{--                                            display: none !important;--}}
            {{--                                        }--}}
            {{--                                        .apexcharts-inactive-legend {--}}
            {{--                                            opacity: 0.45;--}}
            {{--                                        }</style></foreignObject><g id="SvgjsG5771" class="apexcharts-inner apexcharts-graphical" transform="translate(62.484375, 30)"><defs id="SvgjsDefs5770"><linearGradient id="SvgjsLinearGradient5776" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop5777" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop5778" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop5779" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasknx7gl90l"><rect id="SvgjsRect5781" width="871.515625" height="265.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasknx7gl90l"><rect id="SvgjsRect5782" width="869.515625" height="267.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect5780" width="9.616840277777778" height="263.348" x="398.87371893988717" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient5776)" class="apexcharts-xcrosshairs" y2="263.348" filter="none" fill-opacity="0.9" x1="398.87371893988717" x2="398.87371893988717"></rect><g id="SvgjsG5826" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG5827" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText5829" fonts-family="Helvetica, Arial, sans-serif" x="36.063151041666664" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5830">Jan</tspan><title>Jan</title></text><text id="SvgjsText5832" fonts-family="Helvetica, Arial, sans-serif" x="108.189453125" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5833">Feb</tspan><title>Feb</title></text><text id="SvgjsText5835" fonts-family="Helvetica, Arial, sans-serif" x="180.31575520833334" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5836">Mar</tspan><title>Mar</title></text><text id="SvgjsText5838" fonts-family="Helvetica, Arial, sans-serif" x="252.44205729166666" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5839">Apr</tspan><title>Apr</title></text><text id="SvgjsText5841" fonts-family="Helvetica, Arial, sans-serif" x="324.56835937499994" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5842">May</tspan><title>May</title></text><text id="SvgjsText5844" fonts-family="Helvetica, Arial, sans-serif" x="396.69466145833326" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5845">Jun</tspan><title>Jun</title></text><text id="SvgjsText5847" fonts-family="Helvetica, Arial, sans-serif" x="468.8209635416666" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5848">Jul</tspan><title>Jul</title></text><text id="SvgjsText5850" fonts-family="Helvetica, Arial, sans-serif" x="540.947265625" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5851">Aug</tspan><title>Aug</title></text><text id="SvgjsText5853" fonts-family="Helvetica, Arial, sans-serif" x="613.0735677083334" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5854">Sep</tspan><title>Sep</title></text><text id="SvgjsText5856" fonts-family="Helvetica, Arial, sans-serif" x="685.1998697916667" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5857">Oct</tspan><title>Oct</title></text><text id="SvgjsText5859" fonts-family="Helvetica, Arial, sans-serif" x="757.3261718750001" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5860">Nov</tspan><title>Nov</title></text><text id="SvgjsText5862" fonts-family="Helvetica, Arial, sans-serif" x="829.4524739583335" y="292.348" text-anchor="middle" dominant-baseline="auto" fonts-size="12px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5863">Dec</tspan><title>Dec</title></text></g><line id="SvgjsLine5864" x1="0" y1="264.348" x2="865.515625" y2="264.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG5879" class="apexcharts-grid"><g id="SvgjsG5880" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine5895" x1="0" y1="0" x2="865.515625" y2="0" stroke="#e9ecef" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5896" x1="0" y1="65.837" x2="865.515625" y2="65.837" stroke="#e9ecef" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5897" x1="0" y1="131.674" x2="865.515625" y2="131.674" stroke="#e9ecef" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5898" x1="0" y1="197.51100000000002" x2="865.515625" y2="197.51100000000002" stroke="#e9ecef" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine5899" x1="0" y1="263.348" x2="865.515625" y2="263.348" stroke="#e9ecef" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG5881" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine5882" x1="0" y1="264.348" x2="0" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5883" x1="72.12630208333333" y1="264.348" x2="72.12630208333333" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5884" x1="144.25260416666666" y1="264.348" x2="144.25260416666666" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5885" x1="216.37890625" y1="264.348" x2="216.37890625" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5886" x1="288.5052083333333" y1="264.348" x2="288.5052083333333" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5887" x1="360.63151041666663" y1="264.348" x2="360.63151041666663" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5888" x1="432.75781249999994" y1="264.348" x2="432.75781249999994" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5889" x1="504.88411458333326" y1="264.348" x2="504.88411458333326" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5890" x1="577.0104166666666" y1="264.348" x2="577.0104166666666" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5891" x1="649.13671875" y1="264.348" x2="649.13671875" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5892" x1="721.2630208333334" y1="264.348" x2="721.2630208333334" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5893" x1="793.3893229166667" y1="264.348" x2="793.3893229166667" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5894" x1="865.5156250000001" y1="264.348" x2="865.5156250000001" y2="270.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine5901" x1="0" y1="263.348" x2="865.515625" y2="263.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine5900" x1="0" y1="1" x2="0" y2="263.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG5783" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG5784" class="apexcharts-series" rel="1" seriesName="Male" data:realIndex="0"><path id="SvgjsPath5786" d="M 21.637890624999997 263.348L 21.637890624999997 197.51100000000002Q 21.637890624999997 197.51100000000002 21.637890624999997 197.51100000000002L 29.254730902777773 197.51100000000002Q 29.254730902777773 197.51100000000002 29.254730902777773 197.51100000000002L 29.254730902777773 197.51100000000002L 29.254730902777773 263.348L 29.254730902777773 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 21.637890624999997 263.348L 21.637890624999997 197.51100000000002Q 21.637890624999997 197.51100000000002 21.637890624999997 197.51100000000002L 29.254730902777773 197.51100000000002Q 29.254730902777773 197.51100000000002 29.254730902777773 197.51100000000002L 29.254730902777773 197.51100000000002L 29.254730902777773 263.348L 29.254730902777773 263.348z" pathFrom="M 21.637890624999997 263.348L 21.637890624999997 263.348L 29.254730902777773 263.348L 29.254730902777773 263.348L 29.254730902777773 263.348L 29.254730902777773 263.348L 29.254730902777773 263.348L 21.637890624999997 263.348" cy="197.51100000000002" cx="92.76419270833333" j="0" val="300" barHeight="65.837" barWidth="9.616840277777778"></path><path id="SvgjsPath5787" d="M 93.76419270833333 263.348L 93.76419270833333 208.48383333333334Q 93.76419270833333 208.48383333333334 93.76419270833333 208.48383333333334L 101.38103298611111 208.48383333333334Q 101.38103298611111 208.48383333333334 101.38103298611111 208.48383333333334L 101.38103298611111 208.48383333333334L 101.38103298611111 263.348L 101.38103298611111 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 93.76419270833333 263.348L 93.76419270833333 208.48383333333334Q 93.76419270833333 208.48383333333334 93.76419270833333 208.48383333333334L 101.38103298611111 208.48383333333334Q 101.38103298611111 208.48383333333334 101.38103298611111 208.48383333333334L 101.38103298611111 208.48383333333334L 101.38103298611111 263.348L 101.38103298611111 263.348z" pathFrom="M 93.76419270833333 263.348L 93.76419270833333 263.348L 101.38103298611111 263.348L 101.38103298611111 263.348L 101.38103298611111 263.348L 101.38103298611111 263.348L 101.38103298611111 263.348L 93.76419270833333 263.348" cy="208.48383333333334" cx="164.89049479166664" j="1" val="250" barHeight="54.86416666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5788" d="M 165.89049479166664 263.348L 165.89049479166664 143.08574666666667Q 165.89049479166664 143.08574666666667 165.89049479166664 143.08574666666667L 173.50733506944442 143.08574666666667Q 173.50733506944442 143.08574666666667 173.50733506944442 143.08574666666667L 173.50733506944442 143.08574666666667L 173.50733506944442 263.348L 173.50733506944442 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 165.89049479166664 263.348L 165.89049479166664 143.08574666666667Q 165.89049479166664 143.08574666666667 165.89049479166664 143.08574666666667L 173.50733506944442 143.08574666666667Q 173.50733506944442 143.08574666666667 173.50733506944442 143.08574666666667L 173.50733506944442 143.08574666666667L 173.50733506944442 263.348L 173.50733506944442 263.348z" pathFrom="M 165.89049479166664 263.348L 165.89049479166664 263.348L 173.50733506944442 263.348L 173.50733506944442 263.348L 173.50733506944442 263.348L 173.50733506944442 263.348L 173.50733506944442 263.348L 165.89049479166664 263.348" cy="143.08574666666667" cx="237.01679687499995" j="2" val="548" barHeight="120.26225333333335" barWidth="9.616840277777778"></path><path id="SvgjsPath5789" d="M 238.01679687499995 263.348L 238.01679687499995 166.78706666666668Q 238.01679687499995 166.78706666666668 238.01679687499995 166.78706666666668L 245.63363715277774 166.78706666666668Q 245.63363715277774 166.78706666666668 245.63363715277774 166.78706666666668L 245.63363715277774 166.78706666666668L 245.63363715277774 263.348L 245.63363715277774 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 238.01679687499995 263.348L 238.01679687499995 166.78706666666668Q 238.01679687499995 166.78706666666668 238.01679687499995 166.78706666666668L 245.63363715277774 166.78706666666668Q 245.63363715277774 166.78706666666668 245.63363715277774 166.78706666666668L 245.63363715277774 166.78706666666668L 245.63363715277774 263.348L 245.63363715277774 263.348z" pathFrom="M 238.01679687499995 263.348L 238.01679687499995 263.348L 245.63363715277774 263.348L 245.63363715277774 263.348L 245.63363715277774 263.348L 245.63363715277774 263.348L 245.63363715277774 263.348L 238.01679687499995 263.348" cy="166.78706666666668" cx="309.14309895833327" j="3" val="440" barHeight="96.56093333333334" barWidth="9.616840277777778"></path><path id="SvgjsPath5790" d="M 310.14309895833327 263.348L 310.14309895833327 142.64683333333335Q 310.14309895833327 142.64683333333335 310.14309895833327 142.64683333333335L 317.75993923611105 142.64683333333335Q 317.75993923611105 142.64683333333335 317.75993923611105 142.64683333333335L 317.75993923611105 142.64683333333335L 317.75993923611105 263.348L 317.75993923611105 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 310.14309895833327 263.348L 310.14309895833327 142.64683333333335Q 310.14309895833327 142.64683333333335 310.14309895833327 142.64683333333335L 317.75993923611105 142.64683333333335Q 317.75993923611105 142.64683333333335 317.75993923611105 142.64683333333335L 317.75993923611105 142.64683333333335L 317.75993923611105 263.348L 317.75993923611105 263.348z" pathFrom="M 310.14309895833327 263.348L 310.14309895833327 263.348L 317.75993923611105 263.348L 317.75993923611105 263.348L 317.75993923611105 263.348L 317.75993923611105 263.348L 317.75993923611105 263.348L 310.14309895833327 263.348" cy="142.64683333333335" cx="381.2694010416666" j="4" val="550" barHeight="120.70116666666668" barWidth="9.616840277777778"></path><path id="SvgjsPath5791" d="M 382.2694010416666 263.348L 382.2694010416666 138.2577Q 382.2694010416666 138.2577 382.2694010416666 138.2577L 389.88624131944437 138.2577Q 389.88624131944437 138.2577 389.88624131944437 138.2577L 389.88624131944437 138.2577L 389.88624131944437 263.348L 389.88624131944437 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 382.2694010416666 263.348L 382.2694010416666 138.2577Q 382.2694010416666 138.2577 382.2694010416666 138.2577L 389.88624131944437 138.2577Q 389.88624131944437 138.2577 389.88624131944437 138.2577L 389.88624131944437 138.2577L 389.88624131944437 263.348L 389.88624131944437 263.348z" pathFrom="M 382.2694010416666 263.348L 382.2694010416666 263.348L 389.88624131944437 263.348L 389.88624131944437 263.348L 389.88624131944437 263.348L 389.88624131944437 263.348L 389.88624131944437 263.348L 382.2694010416666 263.348" cy="138.2577" cx="453.3957031249999" j="5" val="570" barHeight="125.09030000000001" barWidth="9.616840277777778"></path><path id="SvgjsPath5792" d="M 454.3957031249999 263.348L 454.3957031249999 140.45226666666667Q 454.3957031249999 140.45226666666667 454.3957031249999 140.45226666666667L 462.0125434027777 140.45226666666667Q 462.0125434027777 140.45226666666667 462.0125434027777 140.45226666666667L 462.0125434027777 140.45226666666667L 462.0125434027777 263.348L 462.0125434027777 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 454.3957031249999 263.348L 454.3957031249999 140.45226666666667Q 454.3957031249999 140.45226666666667 454.3957031249999 140.45226666666667L 462.0125434027777 140.45226666666667Q 462.0125434027777 140.45226666666667 462.0125434027777 140.45226666666667L 462.0125434027777 140.45226666666667L 462.0125434027777 263.348L 462.0125434027777 263.348z" pathFrom="M 454.3957031249999 263.348L 454.3957031249999 263.348L 462.0125434027777 263.348L 462.0125434027777 263.348L 462.0125434027777 263.348L 462.0125434027777 263.348L 462.0125434027777 263.348L 454.3957031249999 263.348" cy="140.45226666666667" cx="525.5220052083332" j="6" val="560" barHeight="122.89573333333334" barWidth="9.616840277777778"></path><path id="SvgjsPath5793" d="M 526.5220052083332 263.348L 526.5220052083332 129.47943333333333Q 526.5220052083332 129.47943333333333 526.5220052083332 129.47943333333333L 534.138845486111 129.47943333333333Q 534.138845486111 129.47943333333333 534.138845486111 129.47943333333333L 534.138845486111 129.47943333333333L 534.138845486111 263.348L 534.138845486111 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 526.5220052083332 263.348L 526.5220052083332 129.47943333333333Q 526.5220052083332 129.47943333333333 526.5220052083332 129.47943333333333L 534.138845486111 129.47943333333333Q 534.138845486111 129.47943333333333 534.138845486111 129.47943333333333L 534.138845486111 129.47943333333333L 534.138845486111 263.348L 534.138845486111 263.348z" pathFrom="M 526.5220052083332 263.348L 526.5220052083332 263.348L 534.138845486111 263.348L 534.138845486111 263.348L 534.138845486111 263.348L 534.138845486111 263.348L 534.138845486111 263.348L 526.5220052083332 263.348" cy="129.47943333333333" cx="597.6483072916666" j="7" val="610" barHeight="133.86856666666668" barWidth="9.616840277777778"></path><path id="SvgjsPath5794" d="M 598.6483072916666 263.348L 598.6483072916666 136.06313333333333Q 598.6483072916666 136.06313333333333 598.6483072916666 136.06313333333333L 606.2651475694444 136.06313333333333Q 606.2651475694444 136.06313333333333 606.2651475694444 136.06313333333333L 606.2651475694444 136.06313333333333L 606.2651475694444 263.348L 606.2651475694444 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 598.6483072916666 263.348L 598.6483072916666 136.06313333333333Q 598.6483072916666 136.06313333333333 598.6483072916666 136.06313333333333L 606.2651475694444 136.06313333333333Q 606.2651475694444 136.06313333333333 606.2651475694444 136.06313333333333L 606.2651475694444 136.06313333333333L 606.2651475694444 263.348L 606.2651475694444 263.348z" pathFrom="M 598.6483072916666 263.348L 598.6483072916666 263.348L 606.2651475694444 263.348L 606.2651475694444 263.348L 606.2651475694444 263.348L 606.2651475694444 263.348L 606.2651475694444 263.348L 598.6483072916666 263.348" cy="136.06313333333333" cx="669.774609375" j="8" val="580" barHeight="127.28486666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5795" d="M 670.774609375 263.348L 670.774609375 125.09030000000001Q 670.774609375 125.09030000000001 670.774609375 125.09030000000001L 678.3914496527777 125.09030000000001Q 678.3914496527777 125.09030000000001 678.3914496527777 125.09030000000001L 678.3914496527777 125.09030000000001L 678.3914496527777 263.348L 678.3914496527777 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 670.774609375 263.348L 670.774609375 125.09030000000001Q 670.774609375 125.09030000000001 670.774609375 125.09030000000001L 678.3914496527777 125.09030000000001Q 678.3914496527777 125.09030000000001 678.3914496527777 125.09030000000001L 678.3914496527777 125.09030000000001L 678.3914496527777 263.348L 678.3914496527777 263.348z" pathFrom="M 670.774609375 263.348L 670.774609375 263.348L 678.3914496527777 263.348L 678.3914496527777 263.348L 678.3914496527777 263.348L 678.3914496527777 263.348L 678.3914496527777 263.348L 670.774609375 263.348" cy="125.09030000000001" cx="741.9009114583333" j="9" val="630" barHeight="138.2577" barWidth="9.616840277777778"></path><path id="SvgjsPath5796" d="M 742.9009114583333 263.348L 742.9009114583333 131.674Q 742.9009114583333 131.674 742.9009114583333 131.674L 750.5177517361111 131.674Q 750.5177517361111 131.674 750.5177517361111 131.674L 750.5177517361111 131.674L 750.5177517361111 263.348L 750.5177517361111 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 742.9009114583333 263.348L 742.9009114583333 131.674Q 742.9009114583333 131.674 742.9009114583333 131.674L 750.5177517361111 131.674Q 750.5177517361111 131.674 750.5177517361111 131.674L 750.5177517361111 131.674L 750.5177517361111 263.348L 750.5177517361111 263.348z" pathFrom="M 742.9009114583333 263.348L 742.9009114583333 263.348L 750.5177517361111 263.348L 750.5177517361111 263.348L 750.5177517361111 263.348L 750.5177517361111 263.348L 750.5177517361111 263.348L 742.9009114583333 263.348" cy="131.674" cx="814.0272135416667" j="10" val="600" barHeight="131.674" barWidth="9.616840277777778"></path><path id="SvgjsPath5797" d="M 815.0272135416667 263.348L 815.0272135416667 118.50659999999999Q 815.0272135416667 118.50659999999999 815.0272135416667 118.50659999999999L 822.6440538194445 118.50659999999999Q 822.6440538194445 118.50659999999999 822.6440538194445 118.50659999999999L 822.6440538194445 118.50659999999999L 822.6440538194445 263.348L 822.6440538194445 263.348z" fill="rgba(57,108,240,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 815.0272135416667 263.348L 815.0272135416667 118.50659999999999Q 815.0272135416667 118.50659999999999 815.0272135416667 118.50659999999999L 822.6440538194445 118.50659999999999Q 822.6440538194445 118.50659999999999 822.6440538194445 118.50659999999999L 822.6440538194445 118.50659999999999L 822.6440538194445 263.348L 822.6440538194445 263.348z" pathFrom="M 815.0272135416667 263.348L 815.0272135416667 263.348L 822.6440538194445 263.348L 822.6440538194445 263.348L 822.6440538194445 263.348L 822.6440538194445 263.348L 822.6440538194445 263.348L 815.0272135416667 263.348" cy="118.50659999999999" cx="886.1535156250001" j="11" val="660" barHeight="144.84140000000002" barWidth="9.616840277777778"></path></g><g id="SvgjsG5798" class="apexcharts-series" rel="2" seriesName="Female" data:realIndex="1"><path id="SvgjsPath5800" d="M 31.254730902777773 263.348L 31.254730902777773 207.16709333333336Q 31.254730902777773 207.16709333333336 31.254730902777773 207.16709333333336L 38.87157118055555 207.16709333333336Q 38.87157118055555 207.16709333333336 38.87157118055555 207.16709333333336L 38.87157118055555 207.16709333333336L 38.87157118055555 263.348L 38.87157118055555 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 31.254730902777773 263.348L 31.254730902777773 207.16709333333336Q 31.254730902777773 207.16709333333336 31.254730902777773 207.16709333333336L 38.87157118055555 207.16709333333336Q 38.87157118055555 207.16709333333336 38.87157118055555 207.16709333333336L 38.87157118055555 207.16709333333336L 38.87157118055555 263.348L 38.87157118055555 263.348z" pathFrom="M 31.254730902777773 263.348L 31.254730902777773 263.348L 38.87157118055555 263.348L 38.87157118055555 263.348L 38.87157118055555 263.348L 38.87157118055555 263.348L 38.87157118055555 263.348L 31.254730902777773 263.348" cy="207.16709333333336" cx="102.38103298611111" j="0" val="256" barHeight="56.18090666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5801" d="M 103.38103298611111 263.348L 103.38103298611111 158.0088Q 103.38103298611111 158.0088 103.38103298611111 158.0088L 110.99787326388889 158.0088Q 110.99787326388889 158.0088 110.99787326388889 158.0088L 110.99787326388889 158.0088L 110.99787326388889 263.348L 110.99787326388889 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 103.38103298611111 263.348L 103.38103298611111 158.0088Q 103.38103298611111 158.0088 103.38103298611111 158.0088L 110.99787326388889 158.0088Q 110.99787326388889 158.0088 110.99787326388889 158.0088L 110.99787326388889 158.0088L 110.99787326388889 263.348L 110.99787326388889 263.348z" pathFrom="M 103.38103298611111 263.348L 103.38103298611111 263.348L 110.99787326388889 263.348L 110.99787326388889 263.348L 110.99787326388889 263.348L 110.99787326388889 263.348L 110.99787326388889 263.348L 103.38103298611111 263.348" cy="158.0088" cx="174.50733506944442" j="1" val="480" barHeight="105.3392" barWidth="9.616840277777778"></path><path id="SvgjsPath5802" d="M 175.50733506944442 263.348L 175.50733506944442 140.45226666666667Q 175.50733506944442 140.45226666666667 175.50733506944442 140.45226666666667L 183.1241753472222 140.45226666666667Q 183.1241753472222 140.45226666666667 183.1241753472222 140.45226666666667L 183.1241753472222 140.45226666666667L 183.1241753472222 263.348L 183.1241753472222 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 175.50733506944442 263.348L 175.50733506944442 140.45226666666667Q 175.50733506944442 140.45226666666667 175.50733506944442 140.45226666666667L 183.1241753472222 140.45226666666667Q 183.1241753472222 140.45226666666667 183.1241753472222 140.45226666666667L 183.1241753472222 140.45226666666667L 183.1241753472222 263.348L 183.1241753472222 263.348z" pathFrom="M 175.50733506944442 263.348L 175.50733506944442 263.348L 183.1241753472222 263.348L 183.1241753472222 263.348L 183.1241753472222 263.348L 183.1241753472222 263.348L 183.1241753472222 263.348L 175.50733506944442 263.348" cy="140.45226666666667" cx="246.63363715277774" j="2" val="560" barHeight="122.89573333333334" barWidth="9.616840277777778"></path><path id="SvgjsPath5803" d="M 247.63363715277774 263.348L 247.63363715277774 96.56093333333334Q 247.63363715277774 96.56093333333334 247.63363715277774 96.56093333333334L 255.25047743055552 96.56093333333334Q 255.25047743055552 96.56093333333334 255.25047743055552 96.56093333333334L 255.25047743055552 96.56093333333334L 255.25047743055552 263.348L 255.25047743055552 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 247.63363715277774 263.348L 247.63363715277774 96.56093333333334Q 247.63363715277774 96.56093333333334 247.63363715277774 96.56093333333334L 255.25047743055552 96.56093333333334Q 255.25047743055552 96.56093333333334 255.25047743055552 96.56093333333334L 255.25047743055552 96.56093333333334L 255.25047743055552 263.348L 255.25047743055552 263.348z" pathFrom="M 247.63363715277774 263.348L 247.63363715277774 263.348L 255.25047743055552 263.348L 255.25047743055552 263.348L 255.25047743055552 263.348L 255.25047743055552 263.348L 255.25047743055552 263.348L 247.63363715277774 263.348" cy="96.56093333333334" cx="318.75993923611105" j="3" val="760" barHeight="166.78706666666668" barWidth="9.616840277777778"></path><path id="SvgjsPath5804" d="M 319.75993923611105 263.348L 319.75993923611105 76.80983333333333Q 319.75993923611105 76.80983333333333 319.75993923611105 76.80983333333333L 327.37677951388883 76.80983333333333Q 327.37677951388883 76.80983333333333 327.37677951388883 76.80983333333333L 327.37677951388883 76.80983333333333L 327.37677951388883 263.348L 327.37677951388883 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 319.75993923611105 263.348L 319.75993923611105 76.80983333333333Q 319.75993923611105 76.80983333333333 319.75993923611105 76.80983333333333L 327.37677951388883 76.80983333333333Q 327.37677951388883 76.80983333333333 327.37677951388883 76.80983333333333L 327.37677951388883 76.80983333333333L 327.37677951388883 263.348L 327.37677951388883 263.348z" pathFrom="M 319.75993923611105 263.348L 319.75993923611105 263.348L 327.37677951388883 263.348L 327.37677951388883 263.348L 327.37677951388883 263.348L 327.37677951388883 263.348L 327.37677951388883 263.348L 319.75993923611105 263.348" cy="76.80983333333333" cx="390.88624131944437" j="4" val="850" barHeight="186.53816666666668" barWidth="9.616840277777778"></path><path id="SvgjsPath5805" d="M 391.88624131944437 263.348L 391.88624131944437 41.69676666666666Q 391.88624131944437 41.69676666666666 391.88624131944437 41.69676666666666L 399.50308159722215 41.69676666666666Q 399.50308159722215 41.69676666666666 399.50308159722215 41.69676666666666L 399.50308159722215 41.69676666666666L 399.50308159722215 263.348L 399.50308159722215 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 391.88624131944437 263.348L 391.88624131944437 41.69676666666666Q 391.88624131944437 41.69676666666666 391.88624131944437 41.69676666666666L 399.50308159722215 41.69676666666666Q 399.50308159722215 41.69676666666666 399.50308159722215 41.69676666666666L 399.50308159722215 41.69676666666666L 399.50308159722215 263.348L 399.50308159722215 263.348z" pathFrom="M 391.88624131944437 263.348L 391.88624131944437 263.348L 399.50308159722215 263.348L 399.50308159722215 263.348L 399.50308159722215 263.348L 399.50308159722215 263.348L 399.50308159722215 263.348L 391.88624131944437 263.348" cy="41.69676666666666" cx="463.0125434027777" j="5" val="1010" barHeight="221.65123333333335" barWidth="9.616840277777778"></path><path id="SvgjsPath5806" d="M 464.0125434027777 263.348L 464.0125434027777 48.280466666666655Q 464.0125434027777 48.280466666666655 464.0125434027777 48.280466666666655L 471.62938368055546 48.280466666666655Q 471.62938368055546 48.280466666666655 471.62938368055546 48.280466666666655L 471.62938368055546 48.280466666666655L 471.62938368055546 263.348L 471.62938368055546 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 464.0125434027777 263.348L 464.0125434027777 48.280466666666655Q 464.0125434027777 48.280466666666655 464.0125434027777 48.280466666666655L 471.62938368055546 48.280466666666655Q 471.62938368055546 48.280466666666655 471.62938368055546 48.280466666666655L 471.62938368055546 48.280466666666655L 471.62938368055546 263.348L 471.62938368055546 263.348z" pathFrom="M 464.0125434027777 263.348L 464.0125434027777 263.348L 471.62938368055546 263.348L 471.62938368055546 263.348L 471.62938368055546 263.348L 471.62938368055546 263.348L 471.62938368055546 263.348L 464.0125434027777 263.348" cy="48.280466666666655" cx="535.138845486111" j="6" val="980" barHeight="215.06753333333336" barWidth="9.616840277777778"></path><path id="SvgjsPath5807" d="M 536.138845486111 263.348L 536.138845486111 72.42069999999998Q 536.138845486111 72.42069999999998 536.138845486111 72.42069999999998L 543.7556857638888 72.42069999999998Q 543.7556857638888 72.42069999999998 543.7556857638888 72.42069999999998L 543.7556857638888 72.42069999999998L 543.7556857638888 263.348L 543.7556857638888 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 536.138845486111 263.348L 536.138845486111 72.42069999999998Q 536.138845486111 72.42069999999998 536.138845486111 72.42069999999998L 543.7556857638888 72.42069999999998Q 543.7556857638888 72.42069999999998 543.7556857638888 72.42069999999998L 543.7556857638888 72.42069999999998L 543.7556857638888 263.348L 543.7556857638888 263.348z" pathFrom="M 536.138845486111 263.348L 536.138845486111 263.348L 543.7556857638888 263.348L 543.7556857638888 263.348L 543.7556857638888 263.348L 543.7556857638888 263.348L 543.7556857638888 263.348L 536.138845486111 263.348" cy="72.42069999999998" cx="607.2651475694444" j="7" val="870" barHeight="190.92730000000003" barWidth="9.616840277777778"></path><path id="SvgjsPath5808" d="M 608.2651475694444 263.348L 608.2651475694444 32.918499999999995Q 608.2651475694444 32.918499999999995 608.2651475694444 32.918499999999995L 615.8819878472221 32.918499999999995Q 615.8819878472221 32.918499999999995 615.8819878472221 32.918499999999995L 615.8819878472221 32.918499999999995L 615.8819878472221 263.348L 615.8819878472221 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 608.2651475694444 263.348L 608.2651475694444 32.918499999999995Q 608.2651475694444 32.918499999999995 608.2651475694444 32.918499999999995L 615.8819878472221 32.918499999999995Q 615.8819878472221 32.918499999999995 615.8819878472221 32.918499999999995L 615.8819878472221 32.918499999999995L 615.8819878472221 263.348L 615.8819878472221 263.348z" pathFrom="M 608.2651475694444 263.348L 608.2651475694444 263.348L 615.8819878472221 263.348L 615.8819878472221 263.348L 615.8819878472221 263.348L 615.8819878472221 263.348L 615.8819878472221 263.348L 608.2651475694444 263.348" cy="32.918499999999995" cx="679.3914496527777" j="8" val="1050" barHeight="230.42950000000002" barWidth="9.616840277777778"></path><path id="SvgjsPath5809" d="M 680.3914496527777 263.348L 680.3914496527777 63.642433333333315Q 680.3914496527777 63.642433333333315 680.3914496527777 63.642433333333315L 688.0082899305555 63.642433333333315Q 688.0082899305555 63.642433333333315 688.0082899305555 63.642433333333315L 688.0082899305555 63.642433333333315L 688.0082899305555 263.348L 688.0082899305555 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 680.3914496527777 263.348L 680.3914496527777 63.642433333333315Q 680.3914496527777 63.642433333333315 680.3914496527777 63.642433333333315L 688.0082899305555 63.642433333333315Q 688.0082899305555 63.642433333333315 688.0082899305555 63.642433333333315L 688.0082899305555 63.642433333333315L 688.0082899305555 263.348L 688.0082899305555 263.348z" pathFrom="M 680.3914496527777 263.348L 680.3914496527777 263.348L 688.0082899305555 263.348L 688.0082899305555 263.348L 688.0082899305555 263.348L 688.0082899305555 263.348L 688.0082899305555 263.348L 680.3914496527777 263.348" cy="63.642433333333315" cx="751.5177517361111" j="9" val="910" barHeight="199.7055666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5810" d="M 752.5177517361111 263.348L 752.5177517361111 13.167399999999986Q 752.5177517361111 13.167399999999986 752.5177517361111 13.167399999999986L 760.1345920138889 13.167399999999986Q 760.1345920138889 13.167399999999986 760.1345920138889 13.167399999999986L 760.1345920138889 13.167399999999986L 760.1345920138889 263.348L 760.1345920138889 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 752.5177517361111 263.348L 752.5177517361111 13.167399999999986Q 752.5177517361111 13.167399999999986 752.5177517361111 13.167399999999986L 760.1345920138889 13.167399999999986Q 760.1345920138889 13.167399999999986 760.1345920138889 13.167399999999986L 760.1345920138889 13.167399999999986L 760.1345920138889 263.348L 760.1345920138889 263.348z" pathFrom="M 752.5177517361111 263.348L 752.5177517361111 263.348L 760.1345920138889 263.348L 760.1345920138889 263.348L 760.1345920138889 263.348L 760.1345920138889 263.348L 760.1345920138889 263.348L 752.5177517361111 263.348" cy="13.167399999999986" cx="823.6440538194445" j="10" val="1140" barHeight="250.18060000000003" barWidth="9.616840277777778"></path><path id="SvgjsPath5811" d="M 824.6440538194445 263.348L 824.6440538194445 57.05873333333332Q 824.6440538194445 57.05873333333332 824.6440538194445 57.05873333333332L 832.2608940972223 57.05873333333332Q 832.2608940972223 57.05873333333332 832.2608940972223 57.05873333333332L 832.2608940972223 57.05873333333332L 832.2608940972223 263.348L 832.2608940972223 263.348z" fill="rgba(83,199,151,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 824.6440538194445 263.348L 824.6440538194445 57.05873333333332Q 824.6440538194445 57.05873333333332 824.6440538194445 57.05873333333332L 832.2608940972223 57.05873333333332Q 832.2608940972223 57.05873333333332 832.2608940972223 57.05873333333332L 832.2608940972223 57.05873333333332L 832.2608940972223 263.348L 832.2608940972223 263.348z" pathFrom="M 824.6440538194445 263.348L 824.6440538194445 263.348L 832.2608940972223 263.348L 832.2608940972223 263.348L 832.2608940972223 263.348L 832.2608940972223 263.348L 832.2608940972223 263.348L 824.6440538194445 263.348" cy="57.05873333333332" cx="895.7703559027779" j="11" val="940" barHeight="206.2892666666667" barWidth="9.616840277777778"></path></g><g id="SvgjsG5812" class="apexcharts-series" rel="3" seriesName="Children" data:realIndex="2"><path id="SvgjsPath5814" d="M 40.87157118055555 263.348L 40.87157118055555 158.0088Q 40.87157118055555 158.0088 40.87157118055555 158.0088L 48.488411458333324 158.0088Q 48.488411458333324 158.0088 48.488411458333324 158.0088L 48.488411458333324 158.0088L 48.488411458333324 263.348L 48.488411458333324 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 40.87157118055555 263.348L 40.87157118055555 158.0088Q 40.87157118055555 158.0088 40.87157118055555 158.0088L 48.488411458333324 158.0088Q 48.488411458333324 158.0088 48.488411458333324 158.0088L 48.488411458333324 158.0088L 48.488411458333324 263.348L 48.488411458333324 263.348z" pathFrom="M 40.87157118055555 263.348L 40.87157118055555 263.348L 48.488411458333324 263.348L 48.488411458333324 263.348L 48.488411458333324 263.348L 48.488411458333324 263.348L 48.488411458333324 263.348L 40.87157118055555 263.348" cy="158.0088" cx="111.99787326388888" j="0" val="480" barHeight="105.3392" barWidth="9.616840277777778"></path><path id="SvgjsPath5815" d="M 112.99787326388888 263.348L 112.99787326388888 214.40916333333334Q 112.99787326388888 214.40916333333334 112.99787326388888 214.40916333333334L 120.61471354166666 214.40916333333334Q 120.61471354166666 214.40916333333334 120.61471354166666 214.40916333333334L 120.61471354166666 214.40916333333334L 120.61471354166666 263.348L 120.61471354166666 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 112.99787326388888 263.348L 112.99787326388888 214.40916333333334Q 112.99787326388888 214.40916333333334 112.99787326388888 214.40916333333334L 120.61471354166666 214.40916333333334Q 120.61471354166666 214.40916333333334 120.61471354166666 214.40916333333334L 120.61471354166666 214.40916333333334L 120.61471354166666 263.348L 120.61471354166666 263.348z" pathFrom="M 112.99787326388888 263.348L 112.99787326388888 263.348L 120.61471354166666 263.348L 120.61471354166666 263.348L 120.61471354166666 263.348L 120.61471354166666 263.348L 120.61471354166666 263.348L 112.99787326388888 263.348" cy="214.40916333333334" cx="184.1241753472222" j="1" val="223" barHeight="48.938836666666674" barWidth="9.616840277777778"></path><path id="SvgjsPath5816" d="M 185.1241753472222 263.348L 185.1241753472222 207.16709333333336Q 185.1241753472222 207.16709333333336 185.1241753472222 207.16709333333336L 192.741015625 207.16709333333336Q 192.741015625 207.16709333333336 192.741015625 207.16709333333336L 192.741015625 207.16709333333336L 192.741015625 263.348L 192.741015625 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 185.1241753472222 263.348L 185.1241753472222 207.16709333333336Q 185.1241753472222 207.16709333333336 185.1241753472222 207.16709333333336L 192.741015625 207.16709333333336Q 192.741015625 207.16709333333336 192.741015625 207.16709333333336L 192.741015625 207.16709333333336L 192.741015625 263.348L 192.741015625 263.348z" pathFrom="M 185.1241753472222 263.348L 185.1241753472222 263.348L 192.741015625 263.348L 192.741015625 263.348L 192.741015625 263.348L 192.741015625 263.348L 192.741015625 263.348L 185.1241753472222 263.348" cy="207.16709333333336" cx="256.2504774305555" j="2" val="256" barHeight="56.18090666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5817" d="M 257.2504774305555 263.348L 257.2504774305555 186.53816666666665Q 257.2504774305555 186.53816666666665 257.2504774305555 186.53816666666665L 264.8673177083333 186.53816666666665Q 264.8673177083333 186.53816666666665 264.8673177083333 186.53816666666665L 264.8673177083333 186.53816666666665L 264.8673177083333 263.348L 264.8673177083333 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 257.2504774305555 263.348L 257.2504774305555 186.53816666666665Q 257.2504774305555 186.53816666666665 257.2504774305555 186.53816666666665L 264.8673177083333 186.53816666666665Q 264.8673177083333 186.53816666666665 264.8673177083333 186.53816666666665L 264.8673177083333 186.53816666666665L 264.8673177083333 263.348L 264.8673177083333 263.348z" pathFrom="M 257.2504774305555 263.348L 257.2504774305555 263.348L 264.8673177083333 263.348L 264.8673177083333 263.348L 264.8673177083333 263.348L 264.8673177083333 263.348L 264.8673177083333 263.348L 257.2504774305555 263.348" cy="186.53816666666665" cx="328.37677951388883" j="3" val="350" barHeight="76.80983333333334" barWidth="9.616840277777778"></path><path id="SvgjsPath5818" d="M 329.37677951388883 263.348L 329.37677951388883 173.37076666666667Q 329.37677951388883 173.37076666666667 329.37677951388883 173.37076666666667L 336.9936197916666 173.37076666666667Q 336.9936197916666 173.37076666666667 336.9936197916666 173.37076666666667L 336.9936197916666 173.37076666666667L 336.9936197916666 263.348L 336.9936197916666 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 329.37677951388883 263.348L 329.37677951388883 173.37076666666667Q 329.37677951388883 173.37076666666667 329.37677951388883 173.37076666666667L 336.9936197916666 173.37076666666667Q 336.9936197916666 173.37076666666667 336.9936197916666 173.37076666666667L 336.9936197916666 173.37076666666667L 336.9936197916666 263.348L 336.9936197916666 263.348z" pathFrom="M 329.37677951388883 263.348L 329.37677951388883 263.348L 336.9936197916666 263.348L 336.9936197916666 263.348L 336.9936197916666 263.348L 336.9936197916666 263.348L 336.9936197916666 263.348L 329.37677951388883 263.348" cy="173.37076666666667" cx="400.50308159722215" j="4" val="410" barHeight="89.97723333333334" barWidth="9.616840277777778"></path><path id="SvgjsPath5819" d="M 401.50308159722215 263.348L 401.50308159722215 184.3436Q 401.50308159722215 184.3436 401.50308159722215 184.3436L 409.11992187499993 184.3436Q 409.11992187499993 184.3436 409.11992187499993 184.3436L 409.11992187499993 184.3436L 409.11992187499993 263.348L 409.11992187499993 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 401.50308159722215 263.348L 401.50308159722215 184.3436Q 401.50308159722215 184.3436 401.50308159722215 184.3436L 409.11992187499993 184.3436Q 409.11992187499993 184.3436 409.11992187499993 184.3436L 409.11992187499993 184.3436L 409.11992187499993 263.348L 409.11992187499993 263.348z" pathFrom="M 401.50308159722215 263.348L 401.50308159722215 263.348L 409.11992187499993 263.348L 409.11992187499993 263.348L 409.11992187499993 263.348L 409.11992187499993 263.348L 409.11992187499993 263.348L 401.50308159722215 263.348" cy="184.3436" cx="472.62938368055546" j="5" val="360" barHeight="79.0044" barWidth="9.616840277777778"></path><path id="SvgjsPath5820" d="M 473.62938368055546 263.348L 473.62938368055546 206.28926666666666Q 473.62938368055546 206.28926666666666 473.62938368055546 206.28926666666666L 481.24622395833325 206.28926666666666Q 481.24622395833325 206.28926666666666 481.24622395833325 206.28926666666666L 481.24622395833325 206.28926666666666L 481.24622395833325 263.348L 481.24622395833325 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 473.62938368055546 263.348L 473.62938368055546 206.28926666666666Q 473.62938368055546 206.28926666666666 473.62938368055546 206.28926666666666L 481.24622395833325 206.28926666666666Q 481.24622395833325 206.28926666666666 481.24622395833325 206.28926666666666L 481.24622395833325 206.28926666666666L 481.24622395833325 263.348L 481.24622395833325 263.348z" pathFrom="M 473.62938368055546 263.348L 473.62938368055546 263.348L 481.24622395833325 263.348L 481.24622395833325 263.348L 481.24622395833325 263.348L 481.24622395833325 263.348L 481.24622395833325 263.348L 473.62938368055546 263.348" cy="206.28926666666666" cx="544.7556857638888" j="6" val="260" barHeight="57.058733333333336" barWidth="9.616840277777778"></path><path id="SvgjsPath5821" d="M 545.7556857638888 263.348L 545.7556857638888 164.5925Q 545.7556857638888 164.5925 545.7556857638888 164.5925L 553.3725260416666 164.5925Q 553.3725260416666 164.5925 553.3725260416666 164.5925L 553.3725260416666 164.5925L 553.3725260416666 263.348L 553.3725260416666 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 545.7556857638888 263.348L 545.7556857638888 164.5925Q 545.7556857638888 164.5925 545.7556857638888 164.5925L 553.3725260416666 164.5925Q 553.3725260416666 164.5925 553.3725260416666 164.5925L 553.3725260416666 164.5925L 553.3725260416666 263.348L 553.3725260416666 263.348z" pathFrom="M 545.7556857638888 263.348L 545.7556857638888 263.348L 553.3725260416666 263.348L 553.3725260416666 263.348L 553.3725260416666 263.348L 553.3725260416666 263.348L 553.3725260416666 263.348L 545.7556857638888 263.348" cy="164.5925" cx="616.8819878472221" j="7" val="450" barHeight="98.75550000000001" barWidth="9.616840277777778"></path><path id="SvgjsPath5822" d="M 617.8819878472221 263.348L 617.8819878472221 158.0088Q 617.8819878472221 158.0088 617.8819878472221 158.0088L 625.4988281249999 158.0088Q 625.4988281249999 158.0088 625.4988281249999 158.0088L 625.4988281249999 158.0088L 625.4988281249999 263.348L 625.4988281249999 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 617.8819878472221 263.348L 617.8819878472221 158.0088Q 617.8819878472221 158.0088 617.8819878472221 158.0088L 625.4988281249999 158.0088Q 625.4988281249999 158.0088 625.4988281249999 158.0088L 625.4988281249999 158.0088L 625.4988281249999 263.348L 625.4988281249999 263.348z" pathFrom="M 617.8819878472221 263.348L 617.8819878472221 263.348L 625.4988281249999 263.348L 625.4988281249999 263.348L 625.4988281249999 263.348L 625.4988281249999 263.348L 625.4988281249999 263.348L 617.8819878472221 263.348" cy="158.0088" cx="689.0082899305555" j="8" val="480" barHeight="105.3392" barWidth="9.616840277777778"></path><path id="SvgjsPath5823" d="M 690.0082899305555 263.348L 690.0082899305555 149.23053333333334Q 690.0082899305555 149.23053333333334 690.0082899305555 149.23053333333334L 697.6251302083333 149.23053333333334Q 697.6251302083333 149.23053333333334 697.6251302083333 149.23053333333334L 697.6251302083333 149.23053333333334L 697.6251302083333 263.348L 697.6251302083333 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 690.0082899305555 263.348L 690.0082899305555 149.23053333333334Q 690.0082899305555 149.23053333333334 690.0082899305555 149.23053333333334L 697.6251302083333 149.23053333333334Q 697.6251302083333 149.23053333333334 697.6251302083333 149.23053333333334L 697.6251302083333 149.23053333333334L 697.6251302083333 263.348L 697.6251302083333 263.348z" pathFrom="M 690.0082899305555 263.348L 690.0082899305555 263.348L 697.6251302083333 263.348L 697.6251302083333 263.348L 697.6251302083333 263.348L 697.6251302083333 263.348L 697.6251302083333 263.348L 690.0082899305555 263.348" cy="149.23053333333334" cx="761.1345920138889" j="9" val="520" barHeight="114.11746666666667" barWidth="9.616840277777778"></path><path id="SvgjsPath5824" d="M 762.1345920138889 263.348L 762.1345920138889 147.03596666666667Q 762.1345920138889 147.03596666666667 762.1345920138889 147.03596666666667L 769.7514322916667 147.03596666666667Q 769.7514322916667 147.03596666666667 769.7514322916667 147.03596666666667L 769.7514322916667 147.03596666666667L 769.7514322916667 263.348L 769.7514322916667 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 762.1345920138889 263.348L 762.1345920138889 147.03596666666667Q 762.1345920138889 147.03596666666667 762.1345920138889 147.03596666666667L 769.7514322916667 147.03596666666667Q 769.7514322916667 147.03596666666667 769.7514322916667 147.03596666666667L 769.7514322916667 147.03596666666667L 769.7514322916667 263.348L 769.7514322916667 263.348z" pathFrom="M 762.1345920138889 263.348L 762.1345920138889 263.348L 769.7514322916667 263.348L 769.7514322916667 263.348L 769.7514322916667 263.348L 769.7514322916667 263.348L 769.7514322916667 263.348L 762.1345920138889 263.348" cy="147.03596666666667" cx="833.2608940972223" j="10" val="530" barHeight="116.31203333333335" barWidth="9.616840277777778"></path><path id="SvgjsPath5825" d="M 834.2608940972223 263.348L 834.2608940972223 173.37076666666667Q 834.2608940972223 173.37076666666667 834.2608940972223 173.37076666666667L 841.877734375 173.37076666666667Q 841.877734375 173.37076666666667 841.877734375 173.37076666666667L 841.877734375 173.37076666666667L 841.877734375 263.348L 841.877734375 263.348z" fill="rgba(241,181,97,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasknx7gl90l)" pathTo="M 834.2608940972223 263.348L 834.2608940972223 173.37076666666667Q 834.2608940972223 173.37076666666667 834.2608940972223 173.37076666666667L 841.877734375 173.37076666666667Q 841.877734375 173.37076666666667 841.877734375 173.37076666666667L 841.877734375 173.37076666666667L 841.877734375 263.348L 841.877734375 263.348z" pathFrom="M 834.2608940972223 263.348L 834.2608940972223 263.348L 841.877734375 263.348L 841.877734375 263.348L 841.877734375 263.348L 841.877734375 263.348L 841.877734375 263.348L 834.2608940972223 263.348" cy="173.37076666666667" cx="905.3871961805556" j="11" val="410" barHeight="89.97723333333334" barWidth="9.616840277777778"></path></g><g id="SvgjsG5785" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG5799" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG5813" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine5902" x1="0" y1="0" x2="865.515625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine5903" x1="0" y1="0" x2="865.515625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG5904" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG5905" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG5906" class="apexcharts-point-annotations"></g></g><g id="SvgjsG5865" class="apexcharts-yaxis" rel="0" transform="translate(32.484375, 0)"><g id="SvgjsG5866" class="apexcharts-yaxis-texts-g"><text id="SvgjsText5867" fonts-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" fonts-size="11px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5868">1200</tspan></text><text id="SvgjsText5869" fonts-family="Helvetica, Arial, sans-serif" x="20" y="97.23700000000001" text-anchor="end" dominant-baseline="auto" fonts-size="11px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5870">900</tspan></text><text id="SvgjsText5871" fonts-family="Helvetica, Arial, sans-serif" x="20" y="163.074" text-anchor="end" dominant-baseline="auto" fonts-size="11px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5872">600</tspan></text><text id="SvgjsText5873" fonts-family="Helvetica, Arial, sans-serif" x="20" y="228.91100000000003" text-anchor="end" dominant-baseline="auto" fonts-size="11px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5874">300</tspan></text><text id="SvgjsText5875" fonts-family="Helvetica, Arial, sans-serif" x="20" y="294.748" text-anchor="end" dominant-baseline="auto" fonts-size="11px" fonts-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="fonts-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan5876">0</tspan></text></g><g id="SvgjsG5877" class="apexcharts-yaxis-title"><text id="SvgjsText5878" fonts-family="Inter, sans-serif" x="5.9453125" y="161.674" text-anchor="end" dominant-baseline="auto" fonts-size="13px" fonts-weight="500" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text " style="fonts-family: Inter, sans-serif;" transform="rotate(-90 -19.4375 156.6796875)">Patients</text></g></g><g id="SvgjsG5772" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 466.167px; top: 179px;"><div class="apexcharts-tooltip-title" style="fonts-family: Helvetica, Arial, sans-serif; fonts-size: 12px;">Jun</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 181, 97);"></span><div class="apexcharts-tooltip-text" style="fonts-family: Helvetica, Arial, sans-serif; fonts-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Children: </span><span class="apexcharts-tooltip-text-value">360 Patients</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 181, 97);"></span><div class="apexcharts-tooltip-text" style="fonts-family: Helvetica, Arial, sans-serif; fonts-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Children: </span><span class="apexcharts-tooltip-text-value">360 Patients</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3; display: none;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 181, 97);"></span><div class="apexcharts-tooltip-text" style="fonts-family: Helvetica, Arial, sans-serif; fonts-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Children: </span><span class="apexcharts-tooltip-text-value">360 Patients</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>--}}
            {{--                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 987px; height: 470px;"></div></div><div class="contract-trigger"></div></div></div>--}}
            {{--            </div><!--end col-->--}}

            {{--            <div class="col-xl-4 col-lg-5 mt-4">--}}
            {{--                <div class="card shadow border-0 p-4">--}}
            {{--                    <div class="d-flex justify-content-between align-items-center mb-3">--}}
            {{--                        <h6 class="align-items-center mb-0">Patients by Department</h6>--}}

            {{--                        <div class="mb-0 position-relative">--}}
            {{--                            <select class="form-select form-control" id="dailychart">--}}
            {{--                                <option selected="">Today</option>--}}
            {{--                                <option value="2019">Yesterday</option>--}}
            {{--                            </select>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div id="department" class="apex-chart" style="min-height: 332.8px;"><div id="apexchartsm7zfxs5i" class="apexcharts-canvas apexchartsm7zfxs5i apexcharts-theme-light" style="width: 433px; height: 332.8px;"><svg id="SvgjsSvg5907" width="433" height="332.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG5909" class="apexcharts-inner apexcharts-graphical" transform="translate(54.5, 0)"><defs id="SvgjsDefs5908"><clipPath id="gridRectMaskm7zfxs5i"><rect id="SvgjsRect5911" width="332" height="350" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskm7zfxs5i"><rect id="SvgjsRect5912" width="330" height="352" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter5931" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood5932" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood5932Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite5933" in="SvgjsFeFlood5932Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite5933Out"></feComposite><feOffset id="SvgjsFeOffset5934" dx="0" dy="10" result="SvgjsFeOffset5934Out" in="SvgjsFeComposite5933Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur5935" stdDeviation="2 " result="SvgjsFeGaussianBlur5935Out" in="SvgjsFeOffset5934Out"></feGaussianBlur><feMerge id="SvgjsFeMerge5936" result="SvgjsFeMerge5936Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode5937" in="SvgjsFeGaussianBlur5935Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode5938" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend5939" in="SourceGraphic" in2="SvgjsFeMerge5936Out" mode="normal" result="SvgjsFeBlend5939Out"></feBlend></filter><filter id="SvgjsFilter5942" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood5943" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood5943Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite5944" in="SvgjsFeFlood5943Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite5944Out"></feComposite><feOffset id="SvgjsFeOffset5945" dx="0" dy="10" result="SvgjsFeOffset5945Out" in="SvgjsFeComposite5944Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur5946" stdDeviation="2 " result="SvgjsFeGaussianBlur5946Out" in="SvgjsFeOffset5945Out"></feGaussianBlur><feMerge id="SvgjsFeMerge5947" result="SvgjsFeMerge5947Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode5948" in="SvgjsFeGaussianBlur5946Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode5949" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend5950" in="SourceGraphic" in2="SvgjsFeMerge5947Out" mode="normal" result="SvgjsFeBlend5950Out"></feBlend></filter><filter id="SvgjsFilter5953" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood5954" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood5954Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite5955" in="SvgjsFeFlood5954Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite5955Out"></feComposite><feOffset id="SvgjsFeOffset5956" dx="0" dy="10" result="SvgjsFeOffset5956Out" in="SvgjsFeComposite5955Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur5957" stdDeviation="2 " result="SvgjsFeGaussianBlur5957Out" in="SvgjsFeOffset5956Out"></feGaussianBlur><feMerge id="SvgjsFeMerge5958" result="SvgjsFeMerge5958Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode5959" in="SvgjsFeGaussianBlur5957Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode5960" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend5961" in="SourceGraphic" in2="SvgjsFeMerge5958Out" mode="normal" result="SvgjsFeBlend5961Out"></feBlend></filter><filter id="SvgjsFilter5964" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood5965" flood-color="#45404a2e" flood-opacity="0.35" result="SvgjsFeFlood5965Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite5966" in="SvgjsFeFlood5965Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite5966Out"></feComposite><feOffset id="SvgjsFeOffset5967" dx="0" dy="10" result="SvgjsFeOffset5967Out" in="SvgjsFeComposite5966Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur5968" stdDeviation="2 " result="SvgjsFeGaussianBlur5968Out" in="SvgjsFeOffset5967Out"></feGaussianBlur><feMerge id="SvgjsFeMerge5969" result="SvgjsFeMerge5969Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode5970" in="SvgjsFeGaussianBlur5968Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode5971" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend5972" in="SourceGraphic" in2="SvgjsFeMerge5969Out" mode="normal" result="SvgjsFeBlend5972Out"></feBlend></filter></defs><g id="SvgjsG5913" class="apexcharts-radialbar"><g id="SvgjsG5914"><g id="SvgjsG5915" class="apexcharts-tracks"><g id="SvgjsG5916" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 163 28.729268292682917 A 134.27073170731708 134.27073170731708 0 1 1 162.9765653365454 28.72927033774309" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.5" stroke-linecap="butt" stroke-width="10.187365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 163 28.729268292682917 A 134.27073170731708 134.27073170731708 0 1 1 162.9765653365454 28.72927033774309"></path></g><g id="SvgjsG5918" class="apexcharts-radialbar-track apexcharts-track" rel="2"><path id="apexcharts-radialbarTrack-1" d="M 163 44.23170731707316 A 118.76829268292684 118.76829268292684 0 1 1 162.97927102256233 44.23170912601769" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.5" stroke-linecap="butt" stroke-width="10.187365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 163 44.23170731707316 A 118.76829268292684 118.76829268292684 0 1 1 162.97927102256233 44.23170912601769"></path></g><g id="SvgjsG5920" class="apexcharts-radialbar-track apexcharts-track" rel="3"><path id="apexcharts-radialbarTrack-2" d="M 163 59.7341463414634 A 103.2658536585366 103.2658536585366 0 1 1 162.98197670857925 59.73414791429228" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.5" stroke-linecap="butt" stroke-width="10.187365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 163 59.7341463414634 A 103.2658536585366 103.2658536585366 0 1 1 162.98197670857925 59.73414791429228"></path></g><g id="SvgjsG5922" class="apexcharts-radialbar-track apexcharts-track" rel="4"><path id="apexcharts-radialbarTrack-3" d="M 163 75.23658536585364 A 87.76341463414636 87.76341463414636 0 1 1 162.98468239459618 75.23658670256688" fill="none" fill-opacity="1" stroke="rgba(185,193,212,0.85)" stroke-opacity="0.5" stroke-linecap="butt" stroke-width="10.187365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 163 75.23658536585364 A 87.76341463414636 87.76341463414636 0 1 1 162.98468239459618 75.23658670256688"></path></g></g><g id="SvgjsG5924"><g id="SvgjsG5929" class="apexcharts-series apexcharts-radial-series" seriesName="Cardilogram" rel="1" data:realIndex="0"><path id="SvgjsPath5930" d="M 163 28.729268292682917 A 134.27073170731708 134.27073170731708 0 0 1 213.29870140033992 287.49365457989325" fill="none" fill-opacity="0.85" stroke="rgba(57,108,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="10.502439024390245" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="158" data:value="44" filter="url(#SvgjsFilter5931)" index="0" j="0" data:pathOrig="M 163 28.729268292682917 A 134.27073170731708 134.27073170731708 0 0 1 213.29870140033992 287.49365457989325"></path></g><g id="SvgjsG5940" class="apexcharts-series apexcharts-radial-series" seriesName="Gynecology" rel="2" data:realIndex="1"><path id="SvgjsPath5941" d="M 163 44.23170731707316 A 118.76829268292684 118.76829268292684 0 1 1 126.29857916807791 275.9553586853476" fill="none" fill-opacity="0.85" stroke="rgba(83,199,151,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="10.502439024390245" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="198" data:value="55" filter="url(#SvgjsFilter5942)" index="0" j="1" data:pathOrig="M 163 44.23170731707316 A 118.76829268292684 118.76829268292684 0 1 1 126.29857916807791 275.9553586853476"></path></g><g id="SvgjsG5951" class="apexcharts-series apexcharts-radial-series" seriesName="DentalxCare" rel="3" data:realIndex="2"><path id="SvgjsPath5952" d="M 163 59.7341463414634 A 103.2658536585366 103.2658536585366 0 1 1 72.68164931567102 213.06427929660896" fill="none" fill-opacity="0.85" stroke="rgba(241,181,97,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="10.502439024390245" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="241" data:value="67" filter="url(#SvgjsFilter5953)" index="0" j="2" data:pathOrig="M 163 59.7341463414634 A 103.2658536585366 103.2658536585366 0 1 1 72.68164931567102 213.06427929660896"></path></g><g id="SvgjsG5962" class="apexcharts-series apexcharts-radial-series" seriesName="Neurology" rel="4" data:realIndex="3"><path id="SvgjsPath5963" d="M 163 75.23658536585364 A 87.76341463414636 87.76341463414636 0 1 1 86.24038799512954 120.45145227969769" fill="none" fill-opacity="0.85" stroke="rgba(240,115,90,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="10.502439024390245" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-3" data:angle="299" data:value="83" filter="url(#SvgjsFilter5964)" index="0" j="3" data:pathOrig="M 163 75.23658536585364 A 87.76341463414636 87.76341463414636 0 1 1 86.24038799512954 120.45145227969769"></path></g><circle id="SvgjsCircle5925" r="77.66973170731707" cx="163" cy="163" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG5926" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText5927" fonts-family="Helvetica, Arial, sans-serif" x="163" y="163" text-anchor="middle" dominant-baseline="auto" fonts-size="16px" fonts-weight="600" fill="#8997bd" class="apexcharts-text apexcharts-datalabel-label" style="fonts-family: Helvetica, Arial, sans-serif;">Total</text><text id="SvgjsText5928" fonts-family="Helvetica, Arial, sans-serif" x="163" y="195" text-anchor="middle" dominant-baseline="auto" fonts-size="16px" fonts-weight="400" fill="#8997bd" class="apexcharts-text apexcharts-datalabel-value" style="fonts-family: Helvetica, Arial, sans-serif;">249</text></g></g></g></g><line id="SvgjsLine5973" x1="0" y1="0" x2="326" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine5974" x1="0" y1="0" x2="326" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG5910" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>--}}
            {{--                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 482px; height: 438px;"></div></div><div class="contract-trigger"></div></div></div>--}}
            {{--            </div><!--end col-->--}}
            {{--        </div><!--end row-->--}}
            {{----}}
            <div class="row">
                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card border-0 shadow rounded">
                        <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                            <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Đơn hàng mơí nhất
                            </h6>
                            <h6 class="text-muted mb-0">55 Patients</h6>
                        </div>

                        <ul class="list-unstyled mb-0 p-4">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="ms-3">
                                            <h6 class="text-dark mb-0 d-block">Calvin Carlo</h6>
                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="ms-3">
                                            <h6 class="text-dark mb-0 d-block">Joya Khan</h6>
                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="ms-3">
                                            <h6 class="text-dark mb-0 d-block">Amelia Muli</h6>
                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="ms-3">
                                            <h6 class="text-dark mb-0 d-block">Nik Ronaldo</h6>
                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="ms-3">
                                            <h6 class="text-dark mb-0 d-block">Crista Joseph</h6>
                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card chat chat-person border-0 shadow rounded">
                        <div class="d-flex justify-content-between border-bottom p-4">
                            <div class="d-flex">
                                <img src="" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                <div class="flex-1 overflow-hidden ms-3">
                                    <a href="#" class="text-dark mb-0 h6 d-block text-truncate">Thông báo</a>
                                    <small class="text-muted"><i
                                            class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                        Online</small>
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0">
                                <li class="dropdown dropdown-primary list-inline-item">
                                    <button type="button"
                                            class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="uil uil-ellipsis-h icons"></i></button>
                                    <div
                                        class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3">
                                        <a class="dropdown-item text-dark" href="#"><span
                                                class="mb-0 d-inline-block me-1"><i
                                                    class="uil uil-user align-middle h6"></i></span> Profile</a>
                                        <a class="dropdown-item text-dark" href="#"><span
                                                class="mb-0 d-inline-block me-1"><i
                                                    class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                        <a class="dropdown-item text-dark" href="#"><span
                                                class="mb-0 d-inline-block me-1"><i
                                                    class="uil uil-trash align-middle h6"></i></span> Delete</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <ul class="p-4 list-unstyled mb-0 chat" data-simplebar="init"
                            style="background: none center center; max-height: 295px;">
                            <div class="simplebar-wrapper" style="margin: -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper"
                                             style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 24px;">
                                                <li>
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Hey Christopher</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>59 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="chat-right">
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative chat-user-image">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Hello Cristino</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>45 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="chat-right">
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative chat-user-image">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    How can i help you?</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>44 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Nice to meet you</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>42 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Hope you are doing fine?</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>40 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="chat-right">
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative chat-user-image">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    I'm good thanks for asking</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>45 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    I am intrested to know more about your prices and
                                                                    services you offer</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>35 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="chat-right">
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative chat-user-image">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Sure please check below link to find more useful
                                                                    information <a href="https://1.envato.market/4n73n"
                                                                                   target="_blank" class="text-primary">https://shreethemes.in/landrick/</a>
                                                                </p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>25 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Thank you 😊</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>20 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="chat-right">
                                                    <div class="d-inline-block">
                                                        <div class="d-flex chat-type mb-3">
                                                            <div class="position-relative chat-user-image">
                                                                <img src=""
                                                                     class="avatar avatar-md-sm rounded-circle border shadow"
                                                                     alt="">
                                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                            </div>

                                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                                <p class="text-muted small shadow px-3 py-2 bg-white rounded mb-1">
                                                                    Welcome</p>
                                                                <small class="text-muted msg-time"><i
                                                                        class="uil uil-clock-nine me-1"></i>18 min
                                                                    ago</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 860px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                     style="height: 101px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </ul>

                        <div class="p-2 rounded-bottom shadow">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control border" placeholder="Enter Message...">
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-icon btn-primary"><i
                                            class="uil uil-message icons"></i></a>
                                    <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-smile icons"></i></a>
                                    <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-paperclip icons"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-4 col-lg-12 mt-4">
                    <div class="card border-0 shadow rounded">
                        <div class="p-4 border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="mb-0"><i class="uil uil-user text-primary me-1 h5"></i>Đánh giá gần nhất</h6>

                                <div class="mb-0 position-relative">
                                    <select class="form-select form-control" id="dailypatient">
                                        <option selected="">New</option>
                                        <option value="2019">Old</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0 p-4" data-simplebar="init" style="height: 355px;">
                            <div class="simplebar-wrapper" style="margin: -24px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper"
                                             style="height: 100%; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 24px;">
                                                <li class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <img src=""
                                                             class="avatar avatar-small rounded-circle border shadow"
                                                             alt="">
                                                        <div class="flex-1 ms-3">
                                                            <span class="d-block h6 mb-0">Dr. Calvin Carlo</span>
                                                            <small class="text-muted">Orthopedic</small>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="list-inline-item text-muted">(45)</li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-0">150 Patients</p>
                                                </li>

                                                <li class="d-flex align-items-center justify-content-between mt-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src=""
                                                             class="avatar avatar-small rounded-circle border shadow"
                                                             alt="">
                                                        <div class="flex-1 ms-3">
                                                            <span class="d-block h6 mb-0">Dr. Cristino Murphy</span>
                                                            <small class="text-muted">Gynecology</small>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="list-inline-item text-muted">(75)</li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-0">350 Patients</p>
                                                </li>

                                                <li class="d-flex align-items-center justify-content-between mt-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src=""
                                                             class="avatar avatar-small rounded-circle border shadow"
                                                             alt="">
                                                        <div class="flex-1 ms-3">
                                                            <span class="d-block h6 mb-0">Dr. Alia Reddy</span>
                                                            <small class="text-muted">Psychotherapy</small>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="list-inline-item text-muted">(48)</li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-0">450 Patients</p>
                                                </li>

                                                <li class="d-flex align-items-center justify-content-between mt-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src=""
                                                             class="avatar avatar-small rounded-circle border shadow"
                                                             alt="">
                                                        <div class="flex-1 ms-3">
                                                            <span class="d-block h6 mb-0">Dr. Toni Kover</span>
                                                            <small class="text-muted">Dentist</small>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="list-inline-item text-muted">(68)</li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-0">484 Patients</p>
                                                </li>

                                                <li class="d-flex align-items-center justify-content-between mt-4">
                                                    <div class="d-flex align-items-center">
                                                        <img src=""
                                                             class="avatar avatar-small rounded-circle border shadow"
                                                             alt="">
                                                        <div class="flex-1 ms-3">
                                                            <span class="d-block h6 mb-0">Dr. Jennifer Ballance</span>
                                                            <small class="text-muted">Cardiology</small>

                                                            <ul class="list-unstyled mb-0">
                                                                <li class="list-inline-item text-muted">(55)</li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                                <li class="list-inline-item"><i
                                                                        class="mdi mdi-star text-warning"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <p class="text-muted mb-0">476 Patients</p>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 499px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                     style="height: 252px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>
@stop
