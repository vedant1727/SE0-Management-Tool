<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/dashboard.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="row m-0">
      <div class="menu-sidenav bg-theme">
        <div class="brand-name">
          <a href="javascript:void(0)">AppAdd India</a>
          <p>Dashboard</p>
        </div>
        <ul>
          <li class="sidenav-item active"><a href="javascript:void(0)">Companies & Pages</a></li>
          <li class="sidenav-item"><a href="javascript:void(0)">Accounts</a></li>
          <li class="sidenav-item"><a href="javascript:void(0)">Logins</a></li>
          <li class="sidenav-item"><a href="javascript:void(0)">Pages</a></li>
        </ul>
      </div>
      <div class="content bg-content">
        <ul class="nav-content">
          <li><a href="javascript:void(0)">Admin</a></li>
          <li><a href="javascript:void(0)">Logout</a></li>
        </ul>
        <div class="content-wrapper">
          <div class="entity company">
            <div>
              <h4>Companies</h4>
              <div class="underline"></div>
              <button data-target="addCompany" class="waves-effect waves-white btn-flat action-button modal-trigger"><a href="javascript:void(0)">ADD</a></button>
            </div>
            <ul class="collection entity-collection z-depth-3">
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">WittyFeed</a></p>
                <p>Indore, Madhya Pradesh</p>
                <p>9585314292, vedant@wittyfeed.com</p>
                <a href="#!" class="secondary-content">EDIT</a>
                <a href="#!" class="secondary-content-2">DELETE</a>
                <a href="#!" class="secondary-content-3">DETAILS</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">ClinicSpots</a></p>
                <p>Mumbai, Maharashtra</p>
                <p>8109611930, vedant@digicores.co</p>
                <a href="#!" class="secondary-content">EDIT</a>
                <a href="#!" class="secondary-content-2">DELETE</a>
                <a href="#!" class="secondary-content-3">DETAILS</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">X Billion Tech Labs</a></p>
                <p>Mumbai, India</p>
                <p>9669041114, rahul@netpar.co</p>
                <a href="#!" class="secondary-content">EDIT</a>
                <a href="#!" class="secondary-content-2">DELETE</a>
                <a href="#!" class="secondary-content-3">DETAILS</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">Dinshaw's Dairy Food</a></p>
                <p>Nagpur, Maharashtra</p>
                <p>8989829123, anoop@dinshaws.com</p>
                <a href="#!" class="secondary-content">EDIT</a>
                <a href="#!" class="secondary-content-2">DELETE</a>
                <a href="#!" class="secondary-content-3">DETAILS</a>
              </li>
            </ul>
          </div>
          <div class="entity page">
            <div>
              <h4>Pages</h4>
              <div class="underline"></div>
              <button data-target="addPage" class="waves-effect waves-white btn-flat action-button modal-trigger"><a href="javascript:void(0)">ADD</a></button>
            </div>
            <ul class="collection entity-collection z-depth-3">
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">Dentist in Mumbai</a></p>
                <p>clinicspots.com/mumbai/dentist</p>
                <a href="#!" class="secondary-content">DETAILS</a>
                <a href="#!" class="secondary-content-2">DELETE</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">ClinicSpots</a></p>
                <p>Mumbai, Maharashtra</p>
                <a href="#!" class="secondary-content">8109611930</a>
                <a href="#!" class="secondary-content-below">vedant@digicores.co</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">X Billion Tech Labs</a></p>
                <p>Mumbai, India</p>
                <a href="#!" class="secondary-content">9669041114</a>
                <a href="#!" class="secondary-content-below">rahul@netpar.co</a>
              </li>
              <li class="collection-item avatar">
                <p class="title"><a href="javascript:void(0)">Dinshaw's Dairy Food</a></p>
                <p>Nagpur, Maharashtra</p>
                <a href="#!" class="secondary-content">8989829123</a>
                <a href="#!" class="secondary-content-below">anoop@dinshaws.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- MODALS -->
    <div id="addCompany" class="modal">
      <div class="modal-content">
        <h5 class="m-0">Add Company</h5>
        <div class="underline"></div>
        <form class="col s12">
          <div class="row mb-0">
            <div class="input-field col s6">
              <input id="name" type="text" class="validate">
              <label for="name">Company Name</label>
            </div>
            <div class="input-field col s6">
              <input id="website" type="text" class="validate">
              <label for="website">Website</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s6">
              <input id="primary_email" type="email" class="validate">
              <label for="primary_email">Primary Email</label>
            </div>
            <div class="input-field col s6">
              <input id="secondary_email" type="email" class="validate">
              <label for="secondary_email">Secondary Email</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s6">
              <input id="primary_contact" type="text" class="validate">
              <label for="primary_contact">Primary Contact</label>
            </div>
            <div class="input-field col s6">
              <input id="secondary_contact" type="text" class="validate">
              <label for="secondary_contact">Secondary Contact</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s6">
              <input id="office-address" type="text" class="validate">
              <label for="office-address">Office Address</label>
            </div>
            <div class="input-field col s6">
              <input id="landmark" type="text" class="validate">
              <label for="landmark">Landmark</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s6">
              <input id="city" type="text" class="validate">
              <label for="city">City</label>
            </div>
            <div class="input-field col s6">
              <input id="state" type="text" class="validate">
              <label for="state">State</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea"></textarea>
              <label for="textarea1">Description</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light bg-theme" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>

    <div id="addPage" class="modal">
      <div class="modal-content">
        <h5 class="m-0">Add Page</h5>
        <div class="underline"></div>
        <p class="company-name"><span>Company Name - </span> WittyFeed</p>
        <form class="col s12">
          <div class="row mb-0">
            <div class="input-field col s12">
              <input id="page_name" type="text" class="validate">
              <label for="page_name">Page Name</label>
            </div>
          </div>
          <div class="row mb-0">
            <div class="input-field col s12">
              <input id="page_url" type="text" class="validate">
              <label for="page_url">Page url</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light bg-theme" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
      </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/js/materialize.min.js" id="material-js"></script>
    <script type="text/javascript" src="assets/js/constants.js" defer></script>
    <script type="text/javascript" src="assets/js/request.js" defer></script>
    <script type="text/javascript" src="assets/js/entities/company.js" defer></script>
    <script type="text/javascript" src="assets/js/entities/page.js" defer></script>
    <script type="text/javascript" src="assets/js/pages/dashboard.js" defer></script>
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        var addCompany = document.querySelectorAll('#addCompany');
        var addCompany = M.Modal.init(addCompany);

        var addPage = document.querySelectorAll('#addPage');
        var addPage = M.Modal.init(addPage);
      });
    </script>
  </body>
</html>