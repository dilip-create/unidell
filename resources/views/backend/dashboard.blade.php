@extends('backend.layout.main')
@push('title')
    Dashboard
@endpush
@section('main-section')
        

    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Wecome to UniDell Medical</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Dashboard</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-green">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">Total Tickets</div>
                        <h3 class="m-b-0"><span id="tickets"></span> +
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">21% Higher Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-orange">
                        <div class="icon m-b-10">
                            <span class="chart chart-line"></span>
                        </div>
                        <div class="text m-b-10">Total Departments</div>
                        <h3 class="m-b-0"><span id="department"></span> +
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">13% Highr Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-cyan">
                        <div class="icon m-b-10">
                            <div class="chart chart-pie"></div>
                        </div>
                        <div class="text m-b-10">Total Agents</div>
                        <h3 class="m-b-0"><span id="agents"></span> +
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">34% Lower Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-purple">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">Total Users</div>
                        <h3 class="m-b-0"><span id="users"></span> +
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">06% Lower Than Average </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="line-chart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="radar-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </section>
     <script>
  function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const obj = document.getElementById("tickets");
animateValue(obj, 0, <?php echo $ddata['tickets']; ?>, 5000);


const obj1 = document.getElementById("department");
animateValue(obj1, 0, <?php echo $ddata['department']; ?>, 5000);


const obj2 = document.getElementById("agents");
animateValue(obj2, 0, <?php echo $ddata['agents']; ?>, 5000);


const obj4 = document.getElementById("users");
animateValue(obj4, 0, <?php echo $ddata['users']; ?>, 5000);
</script>

@endsection