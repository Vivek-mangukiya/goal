@extends('layouts.front')
@section('title', 'Effective REVIT Modelling')
@section('services', 'active')
@section('css')
@endsection
@section('content')
<div class="main-wrapper">
    <!-- Banner start -->
    <section class="banner">
       <div class="banner-inner">
          <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-10">
                   <div class="banner-text text-center">
                      <div class="heading">
                         <h2 class="line-clamp-5">Plumbing Engineering Services: Every sink, toilet,
                            shower, roof drain, dishwasher, swimming pool, spa,
                            gas stove, gas boiler, or specialty plumbing fixture
                            requires an adequate network of piping to function smoothly.
                         </h2>
                         <a href="javascript:void(0)" class="my-button">Request a proposal</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Banner end -->
    <!--  -->
    <section class="service-mechanical section-pt d-block">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="heading text-center">
                   <h2 class="my-0">We will prioritize your project's plumbing needs</h2>
                </div>
                <div class="row">
                   <div class="col-md-4">
                      <div class="mechanical-needs-box d-flex align-items-start">
                         <div class="mechanical-ico-box mechanical-blue">
                            <img src="{{frontassets()}}/images/success1.svg" class="img-fluid" alt="" />
                         </div>
                         <div class="mechanical-need-content">
                            <h4>Aesthetics concept</h4>
                            <p>We provide innovative and
                               carefully detailed to your
                               project building needs.
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="mechanical-needs-box d-flex align-items-start">
                         <div class="mechanical-ico-box mechanical-red">
                            <img src="{{frontassets()}}/images/accuracy1.svg" class="img-fluid" alt="" />
                         </div>
                         <div class="mechanical-need-content">
                            <h4>Expertise in a variety
                               of plumbing solutions
                            </h4>
                            <p>Whether your project is a new
                               building or renovating, 
                               residential or commercial, our 
                               expertise cut across wide range
                               of structures.
                            </p>
                         </div>
                      </div>
                   </div>
                   <div class="col-md-4">
                      <div class="mechanical-needs-box d-flex align-items-start">
                         <div class="mechanical-ico-box mechanical-cream">
                            <img src="{{frontassets()}}/images/maintenance1.svg" class="img-fluid" alt="" />
                         </div>
                         <div class="mechanical-need-content">
                            <h4>Efficient & Durable
                               Solution 
                            </h4>
                            <p>Our speciality plumbing
                               solutions are designed 
                               with efficiency, functionality,
                               and longevity in mind.
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="testimonial section-mt">
       <div class="container">
          <div class="row">
             <div class="heading">
                <h2>Expert electrical engineering services </h2>
                <p>delivered by qualified Engineers</p>
             </div>
             <div class="col-md-4 mb-4 mb-md-0">
                <div class="expert-mechanical-box">
                   <div class="expert-mechanical-ico">
                      <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                   </div>
                   <p>40% Faster Turnaround time
                      versus industry practice
                   </p>
                </div>
             </div>
             <div class="col-md-4 mb-4 mb-md-0">
                <div class="expert-mechanical-box">
                   <div class="expert-mechanical-ico">
                      <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                   </div>
                   <p>ZERO project delay, we capture
                      all your needs from onset.
                   </p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="expert-mechanical-box">
                   <div class="expert-mechanical-ico">
                      <img src="{{frontassets()}}/images/verified-user1.svg" class="img-fluid" alt="" />
                   </div>
                   <p>80% First-Time Approval</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="hvac-service-section section-pt">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="heading text-center mb-4 mb-lg-0">
                   <h2 class="my-0">Most Requested Plumbing Services</h2>
                </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                   <ul class="hvac-services-list hvac-services-wrap">
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Hot Water System Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Cold Water System Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Vent Piping Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Sanitary System Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Hot Water Heater Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Site Connection</li>
                   </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                   <ul class="hvac-services-list hvac-services-wrap">
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Commercial Kitchen Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Commercial Laundry Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Rainwater System Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Gas Piping Design</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Plumbing Riser Diagram</li>
                      <li><img src="{{frontassets()}}/images/verifieduser.svg" class="img-fluid me-2" alt="" />Plumbing Fixture Schedule</li>
                   </ul>
                </div>
             </div>
             <div class="col-12 mt-4 mt-md-5 mt-lg-0">
                <h6 class="hvac-services-highlight">Our design process is flexible and agile, allowing us to 
                   have turnaround times faster than anyone else in the industry.
                </h6>
             </div>
          </div>
       </div>
    </section>
    <section class="testimonial section-mt">
       <div class="container">
          <div class="row">
             <div class="heading">
                <h2>Testimonials</h2>
                <p>What our clients says</p>
             </div>
             <div class="owl-carousel owl-theme">
                <div class="item">
                   <div class="text-box">
                      <p>Amet minim mollit non 
                         deserunt ullamco est sit 
                         aliqua dolor do amet sint. 
                         Velit officia consequat duis 
                         enim velit mollit. Exercitation 
                         veniam consequat sunt nostr
                         ud amet.
                      </p>
                   </div>
                   <div class="heading">
                      <h2>Jane Doe</h2>
                      <p>Location / Position / Company</p>
                   </div>
                </div>
                <div class="item">
                   <div class="text-box">
                      <p>Amet minim mollit non 
                         deserunt ullamco est sit 
                         aliqua dolor do amet sint. 
                         Velit officia consequat duis 
                         enim velit mollit. Exercitation 
                         veniam consequat sunt nostr
                         ud amet.
                      </p>
                   </div>
                   <div class="heading">
                      <h2>Jane Doe</h2>
                      <p>Location / Position / Company</p>
                   </div>
                </div>
                <div class="item">
                   <div class="text-box">
                      <p>Amet minim mollit non 
                         deserunt ullamco est sit 
                         aliqua dolor do amet sint. 
                         Velit officia consequat duis 
                         enim velit mollit. Exercitation 
                         veniam consequat sunt nostr
                         ud amet.
                      </p>
                   </div>
                   <div class="heading">
                      <h2>Jane Doe</h2>
                      <p>Location / Position / Company</p>
                   </div>
                </div>
                <div class="item">
                   <div class="text-box">
                      <p>Amet minim mollit non 
                         deserunt ullamco est sit 
                         aliqua dolor do amet sint. 
                         Velit officia consequat duis 
                         enim velit mollit. Exercitation 
                         veniam consequat sunt nostr
                         ud amet.
                      </p>
                   </div>
                   <div class="heading">
                      <h2>Jane Doe</h2>
                      <p>Location / Position / Company</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="request">
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-12">
                <div class="request-text">
                   <div class="heading text-center">
                      <h2>Request a proposal</h2>
                      <p>Optional – Book a 1:1 With Our Consultants </p>
                      <a href="javascript:void(0)" class="my-button">Request a proposal</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
 </div>
@endsection
