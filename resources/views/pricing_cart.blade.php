@extends('layouts.master')
@section('title') {{'Pricing'}} @endsection
@section('content')

<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div class="card-group" style="padding: 6%;">
        <div class="card gap-3 px-2">
          <div class="card-body">
            <h3 class="card-title font-weight-bold">BASIC</h3>
            <p>$5 per month</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check"></i> Pick your Lms app in <mark style="background-color: rgb(164, 232, 164);">30 minutes</mark></li>
                <li><i class="fa fa-check"></i> <mark style="background-color: rgb(164, 232, 164);">100</mark> subjects with Limited practise sessions</li>
                <li><i class="fa fa-check"></i> Chat with almost <mark style="background-color: rgb(164, 232, 164);">100 members</mark></li>
                <li><i class="fa fa-check"></i> Almost of 100 Assignments</li>
                <li><i class="fa fa-check"></i> Get your <mark style="background-color: rgb(164, 232, 164);">Data Backup</mark> <mark style="background-color: rgb(164, 232, 164);">5 days</mark></li>
            </ul>
          </div>
          <div class="card-footer">
            <div class="d-grid gap-2">
                <button class="btn btn-success" type="button">Sign up</button>
              </div>
          </div>
        </div>
        <div class="card" >
          <div class="card-body">
            <h3 class="card-title font-weight-bold">Silver</h3>
            <p class="card-text">$99 per month</p>
            <ul class="list-unstyled">
                <li><i class="fa fa-check"></i> Pick your Lms app in <mark style="background-color: rgb(211, 207, 207);"> 20 minutes</mark></li>
                <li><i class="fa fa-check"></i> <mark style="background-color: rgb(211, 207, 207);">500</mark> subjects with Unlimited practise sessions</li>
                <li><i class="fa fa-check"></i> Chat with almost <mark style="background-color: rgb(211, 207, 207);"> 500</mark>members</li>
                <li><i class="fa fa-check"></i> Almost of 500 Assignments</li>
                <li><i class="fa fa-check"></i> Get your <mark style="background-color: rgb(211, 207, 207);">Data Backup</mark>for <mark style="background-color: rgb(211, 207, 207);">5 days</mark></li>

            </ul>
          </div>
          <div class="card-footer">
            <div class="d-grid gap-2">
                <button class="btn btn-secondary" type="button">Sign up</button>
              </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Gold</h3>
            <p class="card-text">$149 per month</p>
            <ul class="list-unstyled">
                <li> <i class="fa fa-check"></i> Pick your Lms app in  <mark style="background-color:  rgb(246, 224, 103);">10 minutes</li>
                <li><i class="fa fa-check"></i> <mark style="background-color:  rgb(246, 224, 103);">Unlimited</mark> subjects with Limited practise sessions</li>
                <li><i class="fa fa-check"></i> Chat with <mark style="background-color:  rgb(246, 224, 103);">Unlimited</mark> members</li>
                <li><i class="fa fa-check"></i> Almost of 1000 Assignments</li>
                <li><i class="fa fa-check"></i> Get your <mark style="background-color:  rgb(246, 224, 103);">data backup</mark> for <mark style="background-color:  rgb(246, 224, 103);">25 days</mark></li>
            </ul>
          </div>
          
          <div class="card-footer">
            <div class="d-grid gap-2">
                <button class="btn btn-warning" type="button">Sign up</button>
              </div>
          </div>
        </div>
        <div class="card">
            <div class="card-body">
              <h3 class="card-title">Platinum</h3>
              <p class="card-text">$250 per month</p>
              <ul class="list-unstyled">
                <li><i class="fa fa-check"></i> Pick your Lms app in <mark style="background-color: rgb(246, 240, 240);">10 minutes</li>
                <li><i class="fa fa-check"></i> <mark style="background-color: rgb(246, 240, 240);">Unlimited</mark> subjects with Limited practise sessions</li>
                <li><i class="fa fa-check"></i> Chat with almost <mark style="background-color: rgb(246, 240, 240);">Unlimited</mark> members</li>
                <li><i class="fa fa-check"></i> Almost of 1000+ Assignments</li>
                <li><i class="fa fa-check"></i> Get your <mark style="background-color: rgb(246, 240, 240);">data backup</mark> for <mark style="background-color: rgb(246, 240, 240);">60 days</mark></li>
            </ul>
            </div>
            <div class="card-footer">
              <div class="d-grid gap-2">
                  <button class="btn btn-light" type="button">Sign up</button>
                </div>
            </div>
          </div>
      </div>
      <section class="table" style="padding: 6%;">
        <table class="table table-borderless">
            <thead>
                <tr>
                  <th scope="col">Features</th>
                  <th scope="col">Basic</th>
                  <th scope="col">Silver</th>
                  <th scope="col">Gold</th>
                  <th scope="col">Platinum</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Instant LMS App can be done by🕐</th>
                  <td>30min*</td>
                  <td>20min*</td>
                  <td>10min*</td>
                  <td>10min*</td>
                </tr>
                <tr>
                  <th scope="row">Available logins <i class="fa fa-sign-in" aria-hidden="true"></i></th>
                  <td>Student/Teacher</td>
                  <td>Student/Teacher</td>
                  <td>Student/Teacher</td>
                  <td>Student/Teacher</td>
                </tr>
                <tr>
                    <th scope="row">App Available</th>
                    <td>❌</td>
                    <td>Google play store</td>
                    <td>Google play store</td>
                    <td>Google play store</td>
                </tr>
                <tr>
                    <th scope="row">Students <i class="fa fa-graduation-cap" aria-hidden="true"></i></th>
                    <td>100 Nos</td>
                    <td>500 Nos</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Teachers👩‍🏫</i></th>
                    <td>100 Nos</td>
                    <td>500 Nos</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Analytics <i class="fa fa-bar-chart" aria-hidden="true"></i></th>
                    <td>100 Nos</td>
                    <td>500 Nos</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Data export formates <i class="fa fa-bar-chart" aria-hidden="true"></i></th>
                    <td>100 Nos</td>
                    <td>500 Nos</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Data export formates <i class="fa fa-file" aria-hidden="true"></i></i></th>
                    <td>100 Nos</td>
                    <td>500 Nos</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Offine textbooks📕</th>
                    <td>100</td>
                    <td>500</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Subjects📑</th>
                    <td>100</td>
                    <td>500</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Practice Session📰</th>
                    <td>Limited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Chat <i class="fa fa-comments" aria-hidden="true"></i></th>
                    <td>100</td>
                    <td>500</td>
                    <td>Unlimited</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Group chat</th>
                    <td>100</td>
                    <td>500</td>
                    <td>1000</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th scope="row">Group video chat <i class="fa fa-commenting" aria-hidden="true"></i></th>
                    <td>50</td>
                    <td>100</td>
                    <td>250</td>
                    <td>500</td>
                </tr>
                <tr>
                    <th scope="row">Live online class💻</th>
                    <td>100</td>
                    <td>500</td>
                    <td>1000</td>
                    <td>1000+</td>
                </tr>
                <tr>
                    <th scope="row">Assignments</th>
                    <td>100</td>
                    <td>500</td>
                    <td>1000</td>
                    <td>1000+</td>
                </tr>
                <tr>
                    <th scope="row">Data Backups</th>
                    <td>5 days</td>
                    <td>15 days</td>
                    <td>25 days</td>
                    <td>60 days</td>
                </tr>
                <tr>
                    <th scope="row">Google Play Store</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Domain</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Domain Privacy</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Domain Security</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Cloud Support</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Premium Support</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Helping Guide</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Notifications</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Online Technical Support</th>
                    <td>❌</td>
                    <td>Normal</td>
                    <td>High</td>
                    <td>Almost High</td>
                </tr>
                <tr>
                    <th scope="row">Time Pable</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
                <tr>
                    <th scope="row">Rest API'S</th>
                    <td>❌</td>
                    <td>✔</td>
                    <td>✔</td>
                    <td>✔</td>
                </tr>
              </tbody>
          </table>
      </section>
</body>

@endsection