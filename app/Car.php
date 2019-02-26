<?php

namespace App;

use  resources\cars\carView;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function carView(){
        return'
       <div class="box">
          <div class="main-container" >
              <div class="car-info-box">
                  <div class="car-info">
                      <div >
                          <div class="car-name">
                          '.$this->brand.'  '.$this->model.'
                          </div>
                          <div class="car-class">
                          or similar '.$this->type.'
                          </div>
                      </div>
                      <div >
                          <div class="opt" title="">
                              Free cancellation
                          </div>
                      </div>
                  </div>
                  <div class="car-details">
                      <div class="car-detail-box"  >
                          <span >
                              <i class="fas fa-user-alt" ></i>
                              '.$this->pasengers.'
                          </span>
                      </div>
                      <div class="car-detail-box"  style="margin-left:38px" >
                          <span >
                              <i class="fas fa-suitcase"></i>
                              '.$this->bags.'
                          </span>
                      </div>
                      <div class="car-detail-box" style="margin-left:38px" >
                          <span>
                              <i class="fas fa-door-closed"></i>
                              '.$this->doors.'
                          </span>
                      </div>
                  </div>
                  <div class="car-location">
                      <div class="car-location-box">
                          <div class="car-location-box-2">
                              <div class="car-location-info">
                                  <div class="car-location-info-box">
                                      <div class="car-adress">
                                          <span class="car-adress-icon">
                                              <i class="fas fa-city"></i>
                                          </span>
                                          <div class="words">'.$this->address.'</div>
                                          <div class="words" style="margin-top:3px; color: #6D8494"> Non-airport</div>
                                      </div>
                                      <div class="agency">
                                          <div class="number">8.0</div>
                                          <img class="photo_1" src="../papildomai/views/img/enterprise.png" alt="car agency: Enterprise">
                                      </div>
                                  </div>
                              </div>
                              <div class="car-photo">
                                  <img class="photo_2" src="../papildomai/views/img/car1.png" alt="Vehicle type: Economy - Mitsubishi Mirage or similar">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="offer-box">
                  <div class="option-box">
                      <button class="button_1" title="More options ">
                          <span class="dots"></span>
                          <span class="dots"></span>
                          <span class="dots"></span>
                      </button>
                  </div>
                  <div class="price-box">
                      <div class="price">$'.$this->price.'</div>
                      <div class="total">
                          <span>Total</span>
                      </div>
                  </div>
                  <div class="hotwire">Hotwire</div>
                  <div class="viewdeal">
                      <div class="viewdeal_1">
                          <div class="viewdeal_2">
                              <button class="button_2">
                                  <span class="viewspan">View Deal</span>
                              </button>
                              <button class="button_3">
                                  <span >
                                      <span class="check_1">
                                          <i class="fas fa-check"></i>
                                      </span>
                                  </span>
                              </button>
                          </div>
                      </div>
                  </dvi>
              </div>
          </div>
      </div>
      </div>';

    }

}
