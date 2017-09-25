<!DOCTYPE html>
<html>
  <head>
    <title>Now Showing</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Monoton" rel="stylesheet">
    
  </head>


<body onload="showMovie()";>

	<header>
    <div><img id="silverado" src="https://image.ibb.co/meKUGa/logofinal.png" alt="Silverado Cinema" border="0"/> Silverado Cinema
    </div>
		<!-- Logo + business name -->
	</header>

	<nav>
		<div>
			<ul>
				<li><a href="index.php"><img class="ico" src="https://image.ibb.co/ifTLRk/Font_Awesome_f015_0_24.png" aria-hidden="true" border="0" />Home</a>
				</li>
				<li><a href="showing.php"><img class"ico" src="https://image.ibb.co/njObz5/Font_Awesome_f145_0_24.png" aria-hidden="true" border="0" /> Now Showing</a>
				</li>
		  </ul>
		</div>
	</nav>

<main>

<article>
<!-- carousel adapted from W3School Tutorial: https://www.w3schools.com/w3css/w3css_slideshow.asp -->
  <div id="showing" class="container">
  	<div>
      <img class="movie" src="https://image.ibb.co/mfF6nQ/despicableme3_16.jpg" alt="Despicable Me" border="0">
      <img class="movie" src="https://image.ibb.co/iRhprk/atomic_blonde_charlize_theron_banner.jpg" alt="Atomic Blonde" border="0">
      <img class="movie" src="https://image.ibb.co/jcQ3HQ/MADAME_1280x375_Date_1280x375_c.jpg" alt="Madame" border="0">
      <img class="movie" src="https://image.ibb.co/jPsmnQ/18216607_1775033269476423_1145837994894948498_o.jpg" alt="The Big Sick" border="0">
    </div>
  </div>

<div id="carousel">
  <button class="button-primary" onclick="plusmovie(-1)">Prev</button>
  <button class="button-primary" onclick="plusmovie(+1)">Next</button>
</div>

  <div class="container timechart">
  <div class="row">
    <div class="twelve columns">
    <div class="six columns dimension">
      <ul>Despicable Me 3</ul>
        <li>Mon-Tue 1pm*</li>
        <li>Wed-Fri 6pm</li>
        <li>Sat-Sun 12pm</li>
    </div>
    <div class="six columns dimension">
      <ul>Atomic Blonde</ul>
        <li>Wed-Fri 9pm</li>
        <li>Sat-Sun 9pm</li>
    </div>
    <div class="six columns dimension">
      <ul>Madame</ul>
        <li>Mon-Tue 6pm*</li>
        <li>Sat-Sun 3pm</li>
    </div>
    <div class="six columns dimension">
      <ul>The Big Sick</ul>
        <li>Mon-Tue 9pm*</li>
        <li>Wed-Fri 1pm*</li>
        <li>Sat-Sun 6pm</li>
        </div>
    </div>
  </div>
</div>

  <div class="container timechart">
    <div class="row">
      <div class="twelve columns dimension">
        <p><strong>Enjoy our movies paying less!</strong><p>
        <p>Discount tickets for any session on Mondays and Tuesdays, and on 1pm sessions from Wednesday to Friday! (marked with *)</p>

        <div class=" row">
          <div class="four columns dimension timechart">
            <ul>Standard Seats Prices</ul>
              <li>Adult: 12.50(*), 18.50</li>
              <li>Concession: 10.50(*), 15.50</li>
              <li>Child: 8.50(*), 12.50</li>
          </div>
          <div class="four columns dimension timechart">
            <ul>Premium Seats Prices</ul>
              <li>Adult: 25.00(*), 30.00</li>
              <li>Child: 20.00(*), 25.00</li>
          </div>
          <div class="four columns dimension timechart">
            <ul>Bean Bags Prices</ul>
              <li>Adult: 22.00(*), 33.00</li>
              <li>Family: 20.00(*), 30.00</li>
              <li>Child: 20.00(*), 30.00</li>
          </div>
          
        </div>
      </div>
  </div>
</div>

  <!-- Starting form code sourced and adapted from https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php -->
  <div class="container form">
    <form action='https://titan.csit.rmit.edu.au/~e54061/wp/silverado-test.php' onsubmit="return formValidate()" method='post' enctype="https" id="tickets">
        <fieldset><legend>Booking Form:</legend>
          <div class="row">
            <div class="five columns">
                <label>Select Movie:</label>
                <select onchange='mvFunc()' class="dropdown u-full-width" form="tickets" name="booking[movie]" id="movieTitle" required>
                  <option selected disabled>Select Movie</option>
                  <option value="CH" id="CH">Despicable Me 3</option>
                  <option value="AC" id="AC">Atomic Blonde</option>
                  <option value="RC" id="RC">The Big Sick</option>
                  <option value="AF" id="AF">Madame</option>
                </select>
            </div>
            <div class="five columns">
              <label>Select Session:</label>
                <select onchange='sessionFunction()'class="dropdown u-full-width" form="tickets" name="booking[session]" id="session" required>
                  <option selected disabled>Select Session</option>
                </select>
            </div>
          </div>
          <fieldset><legend>Select Seat Type and Quantity:*</legend>
            <fieldset><legend>Standart:</legend>
              <div class="row">
                <div class="five columns">
                  <label>Adult</label>
                  <select onchange="stdFuncAd(this.id);" id="stdFSeat" class="dropdown u-full-width" form="tickets" name="booking[seatSF]">
                  <option selected disabled>0</option>
                  <option value="SF1">1</option>
                  <option value="SF2">2</option>
                  <option value="SF3">3</option>
                  <option value="SF4">4</option>
                  <option value="SF5">5</option>
                  <option value="SF6">6</option>
                  <option value="SF7">7</option>
                  <option value="SF8">8</option>
                  <option value="SF9">9</option>
                  <option value="SF10">10</option>
                  </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdAd">$ 0.00</span></p>
              </div>
            </div>
            <div class="row">
              <div class="five columns">
                <label>Concession</label>
                <select onchange="stdFuncCo(this.id);" class="dropdown u-full-width" id="stdCoSeat" form="tickets" name="booking[seatSP]">
                  <option selected disabled>0</option>
                  <option value="SP1">1</option>
                  <option value="SP2">2</option>
                  <option value="SP3">3</option>
                  <option value="SP4">4</option>
                  <option value="SP5">5</option>
                  <option value="SP6">6</option>
                  <option value="SP7">7</option>
                  <option value="SP8">8</option>
                  <option value="SP9">9</option>
                  <option value="SP10">10</option>
                </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdCo">$ 0.00</span></p>
              </div>
            </div>
            <div class="row">
              <div class="five columns">
                <label>Child</label>
                <select onchange="stdFuncCh(this.id);" class="dropdown u-full-width" id="stdChSeat" form="tickets" name="booking[seatSC]">
                  <option selected disabled>0</option>
                  <option value="SC1">1</option>
                  <option value="SC2">2</option>
                  <option value="SC3">3</option>
                  <option value="SC4">4</option>
                  <option value="SC5">5</option>
                  <option value="SC6">6</option>
                  <option value="SC7">7</option>
                  <option value="SC8">8</option>
                  <option value="SC9">9</option>
                  <option value="SC10">10</option>
                </select>
              </div>
              <div class="seven columns">
                <label>Price</label>
                <p><span class="price" id="pStdCh">$ 0.00</span></p>
              </div>
            </div>
            </fieldset>
            <fieldset><legend>First Class</legend>
              <div class="row">
                <div class="five columns">
                  <label>Adult</label>
                  <select onchange="fcFuncAd(this.id);" id="preAd" class="dropdown u-full-width" form="tickets" name="booking[seatFA]">
                    <option selected disabled>0</option>
                    <option value="FA1">1</option>
                    <option value="FA2">2</option>
                    <option value="FA3">3</option>
                    <option value="FA4">4</option>
                    <option value="FA5">5</option>
                    <option value="FA6">6</option>
                    <option value="FA7">7</option>
                    <option value="FA8">8</option>
                    <option value="FA9">9</option>
                    <option value="FA10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pPreAd">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Child</label>
                  <select onchange="fcFuncCh(this.id);" id="preCh" class="dropdown u-full-width" form="tickets" name="booking[seatFC]">
                    <option selected disabled>0</option>
                    <option value="FC1">1</option>
                    <option value="FC2">2</option>
                    <option value="FC3">3</option>
                    <option value="FC4">4</option>
                    <option value="FC5">5</option>
                    <option value="FC6">6</option>
                    <option value="FC7">7</option>
                    <option value="FC8">8</option>
                    <option value="FC9">9</option>
                    <option value="FC10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pPreCh">$ 0.00</span></p>
                </div>
              </div>
            </fieldset>
            <fieldset><legend>Bean Bags</legend>
              <div class="row">
                <div class="five columns">
                  <label>Adult</label>
                  <select onchange="beanFuncAd(this.id);" id="beanAd" class="dropdown u-full-width" form="tickets" name="booking[seatBA]">
                    <option selected disabled>0</option>
                    <option value="BA1">1</option>
                    <option value="BA2">2</option>
                    <option value="BA3">3</option>
                    <option value="BA4">4</option>
                    <option value="BA5">5</option>
                    <option value="BA6">6</option>
                    <option value="BA7">7</option>
                    <option value="BA8">8</option>
                    <option value="BA9">9</option>
                    <option value="BA10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanAd">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Family</label>
                  <select onchange="beanFuncFa(this.id);" id="beanFa" class="dropdown u-full-width" form="tickets" name="booking[seatBF]">
                    <option selected disabled>0</option>
                    <option value="BF1">1</option>
                    <option value="BF2">2</option>
                    <option value="BF3">3</option>
                    <option value="BF4">4</option>
                    <option value="BF5">5</option>
                    <option value="BF6">6</option>
                    <option value="BF7">7</option>
                    <option value="BF8">8</option>
                    <option value="BF9">9</option>
                    <option value="BF10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanFa">$ 0.00</span></p>
                </div>
              </div>
              <div class="row">
                <div class="five columns">
                  <label>Child</label>
                  <select onchange="beanFuncCh(this.id);" id="beanCh" class="dropdown u-full-width" form="tickets" name="booking[seatBC]">
                    <option selected disabled>0</option>
                    <option value="BC1">1</option>
                    <option value="BC2">2</option>
                    <option value="BC3">3</option>
                    <option value="BC4">4</option>
                    <option value="BC5">5</option>
                    <option value="BC6">6</option>
                    <option value="BC7">7</option>
                    <option value="BC8">8</option>
                    <option value="BC9">9</option>
                    <option value="BC10">10</option>
                  </select>
                </div>
                <div class="seven columns">
                  <label>Price</label>
                  <p><span class="price" id="pBeanCh">$ 0.00</span></p>
                </div>
              </div>
            </fieldset>
          </fieldset>
          <h4 class="total">Total: <span class="price" id="pTotal">$ 0.00</span></h4>
          <input class="button-primary" type="submit" value="Book Now" Id="book" >
        </fieldset>
        </form>







            <!-- <fieldset>
              <legend>Select Seat Type and Quantity:*</legend>
            <div class="row">
              <fieldset><legend>Standard:</legend>
                <div class="five columns dimension timechart">
                  <legend>Adult</legend>
                    <select onchange="stdFunc(this.id);" id="stdFSeat" class="dropdown u-full-width" form="tickets" name="booking[seatSF]">
                      <option selected disabled>0</option>
                      <option value="SF1">1</option>
                      <option value="SF2">2</option>
                      <option value="SF3">3</option>
                      <option value="SF4">4</option>
                      <option value="SF5">5</option>
                      <option value="SF6">6</option>
                      <option value="SF7">7</option>
                      <option value="SF8">8</option>
                      <option value="SF9">9</option>
                      <option value="SF10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pStdAd">0.00</span></p>
                </div>
              </fieldset>
              <div class="row">

              </div>
                <div class="two columns dimension timechart">
                  <legend>Concession</legend>
                    <select onchange="stdFunc(this.id);" class="dropdown u-full-width" id="stdCoSeat" form="tickets" name="booking[seatSP]">
                      <option selected disabled>0</option>
                      <option value="SP1">1</option>
                      <option value="SP2">2</option>
                      <option value="SP3">3</option>
                      <option value="SP4">4</option>
                      <option value="SP5">5</option>
                      <option value="SP6">6</option>
                      <option value="SP7">7</option>
                      <option value="SP8">8</option>
                      <option value="SP9">9</option>
                      <option value="SP10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pStdCo">0.00</span></p>
                </div>
                <div class="two columns dimension timechart">
                  <legend>Child</legend>
                    <select onchange="stdFunc(this.id);" class="dropdown u-full-width" id="stdChSeat" form="tickets" name="booking[seatSC]">
                      <option selected disabled>0</option>
                      <option value="SC1">1</option>
                      <option value="SC2">2</option>
                      <option value="SC3">3</option>
                      <option value="SC4">4</option>
                      <option value="SC5">5</option>
                      <option value="SC6">6</option>
                      <option value="SC7">7</option>
                      <option value="SC8">8</option>
                      <option value="SC9">9</option>
                      <option value="SC10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pStdCh">0.00</span></p>
                </div>
              </fieldset>
            <div class="row">
              <fieldset><legend>Premium:</legend>
                <div class="two columns dimension timechart">
                  <legend>Adult</legend>
                    <select onchange="stdFunc(this.id);" id="preAd" class="dropdown u-full-width" form="tickets" name="booking[seatFA]">
                      <option selected disabled>0</option>
                      <option value="FA1">1</option>
                      <option value="FA2">2</option>
                      <option value="FA3">3</option>
                      <option value="FA4">4</option>
                      <option value="FA5">5</option>
                      <option value="FA6">6</option>
                      <option value="FA7">7</option>
                      <option value="FA8">8</option>
                      <option value="FA9">9</option>
                      <option value="FA10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pPreAd">0.00</span></p>
                </div>
                <div class="two columns dimension timechart">
                  <legend>Child</legend>
                    <select onchange="stdFunc(this.id);" id="preCh" class="dropdown u-full-width" form="tickets" name="booking[seatFC]">
                      <option selected disabled>0</option>
                      <option value="FC1">1</option>
                      <option value="FC2">2</option>
                      <option value="FC3">3</option>
                      <option value="FC4">4</option>
                      <option value="FC5">5</option>
                      <option value="FC6">6</option>
                      <option value="FC7">7</option>
                      <option value="FC8">8</option>
                      <option value="FC9">9</option>
                      <option value="FC10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pPreCh">0.00</span></p>
                </div>
              </fieldset>
            <div class="row">
              <fieldset><legend>Bean Bags:</legend>
                <div class="two columns dimension timechart">
                  <legend>Adult</legend>
                    <select onchange="stdFunc(this.id);" id="beanAd" class="dropdown u-full-width" form="tickets" name="booking[seatBA]">
                      <option selected disabled>0</option>
                      <option value="BA1">1</option>
                      <option value="BA2">2</option>
                      <option value="BA3">3</option>
                      <option value="BA4">4</option>
                      <option value="BA5">5</option>
                      <option value="BA6">6</option>
                      <option value="BA7">7</option>
                      <option value="BA8">8</option>
                      <option value="BA9">9</option>
                      <option value="BA10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pBeanAd">0.00</span></p>
                </div>
                <div class="two columns dimension timechart">
                  <legend>Family</legend>
                    <select onchange="stdFunc(this.id);" id="beanFa" class="dropdown u-full-width" form="tickets" name="booking[seatBF]">
                      <option selected disabled>0</option>
                      <option value="BF1">1</option>
                      <option value="BF2">2</option>
                      <option value="BF3">3</option>
                      <option value="BF4">4</option>
                      <option value="BF5">5</option>
                      <option value="BF6">6</option>
                      <option value="BF7">7</option>
                      <option value="BF8">8</option>
                      <option value="BF9">9</option>
                      <option value="BF10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pBeanFa">0.00</span></p>
                </div>
                <div class="two columns dimension timechart">
                  <legend>Child</legend>
                    <select onchange="stdFunc(this.id);" id="beanCh" class="dropdown u-full-width" form="tickets" name="booking[seatBC]">
                      <option selected disabled>0</option>
                      <option value="BC1">1</option>
                      <option value="BC2">2</option>
                      <option value="BC3">3</option>
                      <option value="BC4">4</option>
                      <option value="BC5">5</option>
                      <option value="BC6">6</option>
                      <option value="BC7">7</option>
                      <option value="BC8">8</option>
                      <option value="BC9">9</option>
                      <option value="BC10">10</option>
                    </select>
                </div>
                <div class="one column dimension timechart">
                  <legend>Price</legend>
                  <p><span class="price" id="pBeanCh">0.00</span></p>
                </div>
              </fieldset>
        <h4  class="total">Total: <span>$23</span></h4>
        <h6>Fields marked with * are required</h6>
        <fieldset>
          <div class="row">
            <div class="six columns">
              <legend>Your email</legend><input class="u-full-width" type="email" name ="booking[email]placeholder="youremail@provider.com">
            </div>
          <div class="six columns">
          <legend>Password</legend>
              <input class="u-full-width" type="password" name="booking[password] placeholder="password">
          </div>
        </div>
        </fieldset>
        <input class="button-primary" type="submit" value="Book Now" Id="book" >
      </form> -->
    </div>
  </article>
</main>

    <footer>
    	<div>
    	Silverado Cinemas<br>
    	160 - 192 Main Street, Bacchus Marsh VIC 3340
    	<br>
    	<a href="https://www.google.com/maps/dir//160%2F192+Main+St,+Bacchus+Marsh+VIC+3340,+Australia/@-37.6758156,144.3700848,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x6ad695640f453f45:0x937549b868571184!2m2!1d144.4401248!2d-37.6758363"><img class="ico" src="https://image.ibb.co/cw3WXQ/Font_Awesome_f041_0_24.png" aria-hidden="true" border="0" />Get Directions</a>
    	<div>

      <div>Mariane Dinis (s3672108) and Ahmet Cem Erdem (s3676200).
      <br>Images edited with <a href="http://www198.lunapic.com/editor/">LunaPic</a><br>Cinema graphic by <a href="http://www.flaticon.com/authors/freepik">freepik</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Check out the new logo that I created on <a href="http://logomakr.com" title="Logo Maker">LogoMaker.com</a> https://logomakr.com/3CB7oF3CB7oF</div>
    </footer>
    <script type="text/javascript" src="form.js"></script>
  </body>
  <script type="text/javascript" src="showing.js"></script>
</html>