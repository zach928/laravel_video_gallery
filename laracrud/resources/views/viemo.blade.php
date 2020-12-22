@extends('base')
@section('main')
<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <div class="container-xl">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
            <img src="https://cdn.shopify.com/s/files/1/0517/0895/2771/files/Cozy-Logo-01-removebg-preview.png?v=1607600230" alt="logo" style="width:104px;">
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml">
            <li class="nav-item">
                <a class="nav-link" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>&nbspGalleries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-video-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"/>
                    </svg>&nbspHow to Videos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                    </svg>&nbsp Help
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Instrructions</a><hr>
                    <a class="dropdown-item" href="#">Support & FAQ's?</a>
                    <a class="dropdown-item" href="#">Helpful Articles</a>
                </div>
            </li>
        </ul>
    </div>
  </div>
</nav><hr>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-white bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <button type="button" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>Back To Galleries</button>
                </li>&nbsp&nbsp
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-secondary">Customize Thumbnails</button>
                </li>&nbsp&nbsp
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 1 0V6.707l1.146 1.147a.5.5 0 0 0 .708-.708z"/>
                        </svg>
                        Add Videos</button>
                </li>
                <li class="nav-item" style="margin-left: 31rem;" >
                    <button type="button" class="btn btn-success text-left">Save</button>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    <div class="container">
    <div class="col-3">
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button data-toggle="collapse" data-target="#layoutcollapse" type="button" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Layout</button>
                    <div class="collapse" id="layoutcollapse">
                        <div class="card card-body"><br>
                            <form class="zach" style="color:black;" action=""><label class="select control-label" for="image_on_click">Video Display Mode</label><br>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="">Popup/Lightbox</option>
                                    <option value="">Inline</option>
                                </select><br>
                                <label class="select control-label" for="image_on_click">Videos per row</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="">Seven</option>
                                    <option value="">Eight</option>
                                    <option value="">Nine</option>
                                    <option value="">Ten</option>
                                    <option value="">Eleven</option>
                                    <option value="">Twelwe</option>
                                </select><br>
                                <label for="formControlRange">Margin Between Images</label><br>
                                <input type="text" name="formControlrange" id="formControlRange">
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>
                                <label class="select control-label" for="image_on_click">Hover</label>
                                <select class="form-control" id="exampleFormControlSelect3">
                                    <option value="">None</option>
                                    <option value="">Fade Lighten</option>
                                    <option value="">Fade Darken</option>
                                    <option value="">Shine Circle</option>
                                    <option value="">Blur</option>
                                    <option value="">Color Rotation</option>
                                    <option value="">Bounce Out</option>
                                </select>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button data-toggle="collapse" data-target="#layout1collapse" type="button" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Video Actions</button>
                    <div class="collapse" id="layout1collapse">
                        <div class="card card-body" class="zach" style="color:black;"><br>
                            <div class="custom-control custom-switch border">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Auto Play Videos</label>
                            </div><br>
                            <div class="custom-control custom-switch border">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Loop Videos</label>
                            </div><br>
                            <div class="custom-control custom-switch border">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3">Mute Youtube Videos</label>
                            </div><br>
                            <div class="custom-control custom-switch border">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                <label class="custom-control-label" for="customSwitch4">Hide Youtube Logo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button data-toggle="collapse" data-target="#layout2collapse" type="button" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        Caption</button>
                    <div class="collapse" id="layout2collapse">
                        <div class="card card-body">
                            <form class="zach" style="color:black;" action=""><label class="select control-label" for="image_on_click">Caption Style</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>No Caption</option>
                                    <option>Hover Caption</option>
                                    <option>Static Caption</option>
                                    <option>Static Outer Caption</option>
                                </select><br>
                                <label for="formControlRange">Caption Font Size</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>

                                <label class="select control-label" for="image_on_click">Changing Background Color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>

                                <label class="select control-label" for="image_on_click">Caption Font Color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>
                            </form> </div>
                    </div>
                </div>
            </div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button type="button" data-toggle="collapse" data-target="#layout3collapse" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Video Play Icon</button>
                    <div class="collapse" id="layout3collapse">
                        <div class="card card-body">
                            <form class="zach" style="color:black;" action=""><label class="select control-label" for="image_on_click">Icon Types</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>No Icon</option>
                                    <option>Rectangle round</option>
                                    <option>Square</option>
                                    <option>Inner Circle</option>
                                    <option>Youtube</option>
                                    <option>Youtube 2</option>
                                    <option>Diagonal</option>
                                    <option>Play</option>
                                    <option>Circle 1</option>
                                    <option>Circle 2</option>
                                    <option>Vimeo Logo</option>
                                </select><br>
                                <label for="formControlRange">Icon Size</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>

                                <label class="select control-label" for="image_on_click">Icon color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>

                                <label class="select control-label" for="image_on_click">Icon Hover Color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>
                            </form> </div>
                    </div>
                </div></div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button type="button" data-toggle="collapse" data-target="#layout4collapse" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Border</button>
                    <div class="collapse" id="layout4collapse">
                        <div class="card card-body">
                            <form class="zach" style="color:black;" action=""><label class="select control-label" for="image_on_click">Border Size</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>

                                <label class="select control-label" for="image_on_click">Border color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>
                            </form> </div>
                    </div>
                </div></div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button type="button"data-toggle="collapse" data-target="#layout5collapse" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Box Shadow</button>
                    <div class="collapse" id="layout5collapse">
                        <div class="card card-body">
                            <form class="zach" style="color:black;" action="">
                                <label class="select control-label" for="image_on_click">Blur</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>
                                <label class="select control-label" for="image_on_click">Spread</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>
                                <label class="select control-label" for="image_on_click">Horizontal Shift</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>
                                <label class="select control-label" for="image_on_click">Vertical Shift</label>
                                <input type="range" class="form-control-range" id="formControlRange" data-slider-min="0" data-slider-max="10"><br>
                                <label class="select control-label" for="image_on_click">Shadow color</label>
                                <div class="card">
                                    <input type="text" name="" id="">
                                </div>
                            </form> </div>
                    </div>
                </div></div>
            <div class="btn-group-vertical " style="width: 20rem;">
                <div class="btn btn-outline-light btn-lg border text-left">
                    <button type="button" data-toggle="collapse" data-target="#layout6collapse" class="btn "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>Custom</button>
                    <div class="collapse" id="layout6collapse"><br>
                        <textarea name="" id="" cols="28" rows="8"></textarea>
                    </div></div></div></div>
        <div class="btn-group-vertical " style="width: 20rem;">
            <div class="px-md-5 btn btn-success border bg-light ml-3" >
                <button type="button" class="btn btn btn-success btn-lg btn-block item-bulk-set-btn">Save</button>
            </div></div>
    </div>
    <div class="container flex">
    <div style="display:inline-flex;position: absolute;right: 9rem;top: 12rem;">
        <div class="container row">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm3IpKfxfZUBDEwEXAuA4DrNB1PRYYUDWi6g&usqp=CAU" alt="Himachal Bir billing view">
        </div>
        <div class="container row ml-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm3IpKfxfZUBDEwEXAuA4DrNB1PRYYUDWi6g&usqp=CAU" alt="Himachal Bir billing view">
        </div>
        <div class="container row ml-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRm3IpKfxfZUBDEwEXAuA4DrNB1PRYYUDWi6g&usqp=CAU" alt="Himachal Bir billing view">
        </div>
        </div>
    </div>
@endsection
