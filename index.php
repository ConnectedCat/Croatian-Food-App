<?php session_start();
?>
<?php
	include('header.php');
	?>
	<header>
	</header>
	
	<section id="main">
		<div id="logos">
			<div id="english" class="logo">
				<img id="logoEng" src="img/logoEngl.png" />
				<p>english</p>
			</div>
			
			<img id="line" src="img/line.png" />
			<div id="croatian" class="logo">
				<p>hrvatski</p>
				<img id="logoCro" src="img/logoCro.png" />
			</div>
		</div>
		<!-- ending logos -->
		
		<div id="intro-croatian" style="display: none;">
			<div id="intro-text">
				<h1 id="intro-header">Saznajte koja vam hrvatska regija<br/>najviše odgovara.</h1>
				<p>Hrvatska gastronomija sastoji se od različitih regionalnih<br/>kuhinja, svake sa svojom prepoznatljivom kulinarskom<br/>tradicijom. Slijedite svoj instinkt (I svoje nepce) i izaberite<br/>po jedan odgovor koji najbolje opisuje vaše<br/>prehrambene navike i ukus, a mi ćemo vam reći koja će<br/>vam hrvatska regija* najbolje odgovarati.</p>
				<p class="comment">*Hrvatska je predstavljena kroz 5 regija (Istru, Dalmaciju, Liku, Zagorje i Slavoniju).<br/>Ovakva podjela zasnovana je na specifičnosti karaktera ljudi i gastronomije pojedinih predjela,<br/>u interpretaciji autora.</p>
			</div>
			<section class="intro-start">
				<h2>kreni</h2>
				<img src="img/arrow01.png" />
			</section>
		</div>
		<!-- ending intro croatian -->
		
		<div id="intro-english" style="display: none;">
			<div id="intro-text">	
				<h1 id="intro-header">Find out which Croatian region<br/>is your best fit.</h1>
				<p>Croatian gastronomy consists of various regional<br/>cuisines, each with its own distinctive culinary tradition.<br/>Just follow your gut (and your taste buds), choose one<br/>answer that best describes your food preferences and<br/>tastes, and we'll tell you which Croatian region* is your<br/>perfect match.</p>
				<p class="comment">*Croatia is represented by 5 regions (Istria, Dalmatia, Lika, Zagorje, Slavonia).<br/>This division is based on the distinct character of people and gastronomy in chosen regions,<br/>as interpreted by the authors.</p>
			</div>
			<div class="intro-start">
				<h2>start</h2>
				<img src="img/arrow01.png" />
			</div>
		</div>
		<!-- ending intro english -->
		
		<div id="question" style="display:none;">
			<div id="q1">
				<div class="english" style="display:none;">
					<img src="img/pasta.png" style="top: 120px; left: 82px;"/>
					<div id="text" style="top: 50px; width: 610px;">
						<h2 style="padding-top: 5px;">Which of the following best describes your food style?</h2>
						<form class="custom">
							<div><input type="radio" name="q1" value="a1"><span>light meals, rich in taste, with plenty of fish and/or vegetables</span></div>
							<div><input type="radio" name="q1" value="a2"><span>simple, hearty dishes based on meat and starch</span></div>
							<div><input type="radio" name="q1" value="a3"><span>rich, complex dishes with more fat and spices</span></div>
						</form>
					</div><!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/pasta.png" style="top: 120px; left: 82px;"/>
					<div id="text" style="top: 50px; width: 610px;
					">
						<h2 style="padding-top: 5px;">Koje od navedenih najbolje opisuje Vaš stil ishrane?</h2>
						<form class="custom">
							<div><input type="radio" name="q1" value="a1"><span>lagana jela bogatog okusa sa doste ribe i/ili povrća</span></div>
							<div><input type="radio" name="q1" value="a2"><span>jednostavna, krepka jela na bazi mesa i škroba</span></div>
							<div><input type="radio" name="q1" value="a3"><span>bogata, kompleksna jela sa više masnoće i začina</span></div>
						</form>
					</div> <!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q1 -->
			
			<div id="q2">
				<div class="english" style="display:none;">
					<img src="img/cheese.png" style="left: 150px; z-index: 4; top: 155px;"/>
					<div id="text"  style="top: 85px; width: 535px; padding-bottom: 5px">
						<h2 style="padding-top: 5px;">You usually eat:</h2>
						<form class="custom">
							<div><input type="radio" name="q2" value="a1"><span>smaller meals, several times a day</span></div>
							<div><input type="radio" name="q2" value="a2"><span>one large meal and the rest whenever I get a chance</span></div>
						</form>
					</div>
					<img src="img/pot.png" style="left: 625px; top: 21px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/cheese.png" style="left: 150px; z-index: 4; top: 155px;"/>
					<div id="text"  style="top: 85px; width: 410px; padding-bottom: 5px; padding-right: 5px">
						<h2 style="padding-top: 5px;">Vaši su obroci obično:</h2>
						<form class="custom">
							<div><input type="radio" name="q2" value="a1"><span>mali, više puta dnevno</span></div>
							<div><input type="radio" name="q2" value="a2"><span>jedan veliki obrok, a ostalo kad stignem</span></div>
						</form>
					</div>
					<img src="img/pot.png" style="left: 569px; top: 21px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q2 -->
			
			<div id="q3">
				<div class="english" style="display:none;">
					<img src="img/mushrooms.png" style="left: 119px; top: 120px;"/>
					<div id="text" style="width: 520px;">
						<h2 style="padding-top: 5px;">What is your favorite food group?</h2>
						<form class="custom" style="padding-left: 120px;">
							<div><input type="radio" name="q3" value="a1"><span>meat</span></div>
							<div><input type="radio" name="q3" value="a2"><span>fish and seafood</span></div>
							<div><input type="radio" name="q3" value="a3"><span>grains (pasta, bread, polenta)</span></div>
							<div><input type="radio" name="q3" value="a4"><span>dairy</span></div>
							<div><input type="radio" name="q3" value="a5"><span>vegetables and fruits</span></div>
						</form>
					</div>
					<img src="img/meat.png" style="z-index: 4; top: -62px; left: 578px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/mushrooms.png" style="left: 108px; top: 120px;"/>
					<div id="text" style="width: 543px;">
						<h2 style="padding-top: 5px;">Koja je Vaša omiljena grupa hrane?</h2>
						<form class="custom" style="padding-left: 103px;">
							<div><input type="radio" name="q3" value="a1"><span>meso</span></div>
							<div><input type="radio" name="q3" value="a2"><span>ribe i plodovi mora</span></div>
							<div><input type="radio" name="q3" value="a3"><span>žitarice (tjestenina, kruh, žganci)</span></div>
							<div><input type="radio" name="q3" value="a4"><span>mliječni proizvodi</span></div>
							<div><input type="radio" name="q3" value="a5"><span>povrće i voće</span></div>
						</form>
					</div>
					<img src="img/meat.png" style="z-index: 4; top: -62px; left: 578px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q3 -->
			
			<div id="q4">
				<div class="english" style="display:none;">
					<img src="img/olives.png" style="left: 250px; top: 51px;"/>
					<div id="text" style="width: 260px; top: -140px;">
						<h2 style="padding: 5px 0px 0px 5px;">What type of fat do you prefer?</h2>
						<form class="custom" style="padding-left: 60px;">
							<div><input type="radio" name="q4" value="a1"><span>olive oil</span></div>
							<div><input type="radio" name="q4" value="a2"><span>butter</span></div>
							<div><input type="radio" name="q4" value="a3"><span>lard</span></div>
						</form>
					</div>
					<img src="img/butter.png" style="top: -327px; left: 583px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/olives.png" style="left: 250px; top: 51px;"/>
					<div id="text" style="width: 260px; top: -140px;">
						<h2 style="padding: 5px 0px 0px 5px;">Koji tip masnoće preferirate?</h2>
						<form class="custom" style="padding-left: 30px;">
							<div><input type="radio" name="q4" value="a1"><span>maslinovo ulje</span></div>
							<div><input type="radio" name="q4" value="a2"><span>maslac</span></div>
							<div><input type="radio" name="q4" value="a3"><span>svinjska mast</span></div>
						</form>
					</div>
					<img src="img/butter.png" style="top: -327px; left: 583px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q4 -->
			
			<div id="q5">
				<div class="english" style="display:none;">
					<img src="img/peppers.png" style="top: 72px; left: 195px;" />
					<div id="text" style="width: 350px; top: -170px;">
						<h2 style="padding: 5px;">Which of the <br /> following herbs/spices do you like the most?</h2>
						<form class="custom" style="padding-left: 75px;">
							<div><input type="radio" name="q5" value="a1"><span>basil</span></div>
							<div><input type="radio" name="q5" value="a2"><span>pepper</span></div>
							<div><input type="radio" name="q5" value="a3"><span>rosemary</span></div>
							<div><input type="radio" name="q5" value="a4"><span>dill</span></div>
							<div><input type="radio" name="q5" value="a5"><span>paprika</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/peppers.png" style="top: 72px; left: 195px;" />
					<div id="text" style="width: 336px; top: -170px;">
						<h2 style="padding: 5px;">Od navedenih začina najdraži Vam je:</h2>
						<form class="custom" style="padding-left: 100px;">
							<div><input type="radio" name="q5" value="a1"><span>bosiljak</span></div>
							<div><input type="radio" name="q5" value="a2"><span>papar</span></div>
							<div><input type="radio" name="q5" value="a3"><span>ružmarin</span></div>
							<div><input type="radio" name="q5" value="a4"><span>kopar</span></div>
							<div><input type="radio" name="q5" value="a5"><span>paprika</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q5 -->
			
			<div id="q6">
				<div class="english" style="display:none;">
					<img src="img/fish.png" style="top: 79px; left: 184px;" />
					<div id="text" style="width: 275px; top: -88px;">
						<h2 style="padding-top: 5px;">What type of fish do you prefer?</h2>
						<form class="custom" style="padding-left: 32px;">
							<div><input type="radio" name="q6" value="a1"><span>saltwater fish</span></div>
							<div><input type="radio" name="q6" value="a2"><span>freshwater fish</span></div>
							<div><input type="radio" name="q6" value="a3"><span>I don't eat fish</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/fish.png" style="top: 79px; left: 184px;" />
					<div id="text" style="width: 288px; top: -88px;">
						<h2 style="padding-top: 5px;">Kakvu ribu volite?</h2>
						<form class="custom" style="padding-left: 54px;">
							<div><input type="radio" name="q6" value="a1"><span>morsku</span></div>
							<div><input type="radio" name="q6" value="a2"><span>slatkovodnu</span></div>
							<div><input type="radio" name="q6" value="a3"><span>ne jedem ribu</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q6 -->
			
			<div id="q7">
				<div class="english" style="display:none;">
					<img src="img/bull.png" style="top: 84px; left: 150px;" />
					<div id="text" style="width: 285px; top: -130px;">
						<h2 style="padding-top: 5px;">How about meat?</h2>
						<form class="custom" style="padding-left: 50px;">
							<div><input type="radio" name="q7" value="a1"><span>beef</span></div>
							<div><input type="radio" name="q7" value="a2"><span>pork</span></div>
							<div><input type="radio" name="q7" value="a3"><span>poultry</span></div>
							<div><input type="radio" name="q7" value="a4"><span>lamb</span></div>
							<div><input type="radio" name="q7" value="a5"><span>mutton</span></div>
							<div><input type="radio" name="q7" value="a6"><span>I don't eat meat</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/bull.png" style="top: 84px; left: 199px;" />
					<div id="text" style="width: 191px; top: -130px;">
						<h2 style="padding-top: 5px;">A meso?</h2>
						<form class="custom" style="padding-left: 5px;">
							<div><input type="radio" name="q7" value="a1"><span>govedinu</span></div>
							<div><input type="radio" name="q7" value="a2"><span>svinjetinu</span></div>
							<div><input type="radio" name="q7" value="a3"><span>perad</span></div>
							<div><input type="radio" name="q7" value="a4"><span>janjetinu</span></div>
							<div><input type="radio" name="q7" value="a5"><span>ovčetinu</span></div>
							<div><input type="radio" name="q7" value="a6"><span>ne jedem meso</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q7 -->
			
			<div id="q8">
				<div class="english" style="display:none;">
					<img src="img/corn.png"  style="top: 122px; left: 220px;"/>
					<div id="text" style="width: 265px; top: 45px;">
						<h2 style="padding-top: 5px;">Pick a side dish:</h2>
						<form class="custom" style="padding-left: 35px;">
							<div><input type="radio" name="q8" value="a1"><span>potatoes</span></div>
							<div><input type="radio" name="q8" value="a2"><span>beans</span></div>
							<div><input type="radio" name="q8" value="a3"><span>pasta</span></div>
							<div><input type="radio" name="q8" value="a4"><span>squash</span></div>
							<div><input type="radio" name="q8" value="a5"><span>polenta</span></div>
						</form>
					</div>
					<img src="img/potato.png" style="z-index: 4; top: -55px; left: 538px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/corn.png"  style="top: 122px; left: 220px;"/>
					<div id="text" style="width: 322px; top: 45px;">
						<h2 style="padding-top: 5px;">Izaberite svoj prilog:</h2>
						<form class="custom" style="padding-left: 84px;">
							<div><input type="radio" name="q8" value="a1"><span>krumpir</span></div>
							<div><input type="radio" name="q8" value="a2"><span>grah</span></div>
							<div><input type="radio" name="q8" value="a3"><span>tjestenina</span></div>
							<div><input type="radio" name="q8" value="a4"><span>buče</span></div>
							<div><input type="radio" name="q8" value="a5"><span>žganci</span></div>
						</form>
					</div>
					<img src="img/potato.png" style="z-index: 4; top: -55px; left: 538px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q8 -->
			
			<div id="q9">
				<div class="english" style="display:none;">
					<img src="img/beets.png" style="top: 81px; left: 70px;" />
					<div id="text" style="width: 520px; top: -158px;">
						<h2 style="padding-top: 5px;">Which of the following vegetables do you like the most?</h2>
						<form class="custom" style="padding-left: 177px;">
							<div><input type="radio" name="q9" value="a1"><span>chard</span></div>
							<div><input type="radio" name="q9" value="a2"><span>beets</span></div>
							<div><input type="radio" name="q9" value="a3"><span>asparagus</span></div>
							<div><input type="radio" name="q9" value="a4"><span>cabbage</span></div>
							<div><input type="radio" name="q9" value="a5"><span>peppers</span></div>
						</form>
					</div>
					<img src="img/chard.png" style="z-index: 4; left: 547px; top: -315px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/beets.png" style="top: 81px; left: 118px;" />
					<div id="text" style="width: 418px; top: -158px;">
						<h2 style="padding-top: 5px;">Od sljedećeg povrća, koje Vam je najdraže?</h2>
						<form class="custom" style="padding-left: 136px;">
							<div><input type="radio" name="q9" value="a1"><span>blitva</span></div>
							<div><input type="radio" name="q9" value="a2"><span>cikla</span></div>
							<div><input type="radio" name="q9" value="a3"><span>šparoga</span></div>
							<div><input type="radio" name="q9" value="a4"><span>kupus</span></div>
							<div><input type="radio" name="q9" value="a5"><span>paprika</span></div>
						</form>
					</div>
					<img src="img/chard.png" style="z-index: 4; left: 554px; top: -315px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q9 -->
			
			<div id="q10">
				<div class="english" style="display:none;">
					<img src="img/olives1.png" style="left: 108px; top: 22px;" />
					<div id="text" style="width: 395px; top: -218px;">
						<h2 style="padding-top: 5px;">And pickled vegetables?</h2>
						<form class="custom" style="padding-left: 93px;">
							<div><input type="radio" name="q10" value="a1"><span>pickles</span></div>
							<div><input type="radio" name="q10" value="a2"><span>sauerkraut</span></div>
							<div><input type="radio" name="q10" value="a3"><span>peppers</span></div>
							<div><input type="radio" name="q10" value="a4"><span>olives</span></div>
							<div><input type="radio" name="q10" value="a5"><span>I don't like <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pickled vegetables</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/olives1.png" style="left: 108px; top: 22px;" />
					<div id="text" style="width: 348px; top: -218px;">
						<h2 style="padding-top: 5px;">A ukiseljeno povrće?</h2>
						<form class="custom" style="padding-left: 93px;">
							<div><input type="radio" name="q10" value="a1"><span>krastavci</span></div>
							<div><input type="radio" name="q10" value="a2"><span>kiseli kupus</span></div>
							<div><input type="radio" name="q10" value="a3"><span>paprika</span></div>
							<div><input type="radio" name="q10" value="a4"><span>masline</span></div>
							<div><input type="radio" name="q10" value="a5"><span>ne volim <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kiselo povrće</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q10 -->
			
			<div id="q11">
				<div class="english" style="display:none;">
					<img src="img/cheese2.png" style="left: 187px; top: 115px;" />
					<div id="text" style="width: 395px; top: 28px;" >
						<h2 style="padding: 5px 15px;">What type of cheese do you prefer?</h2>
						<form class="custom" style="padding-left: 105px;">
							<div><input type="radio" name="q11" value="a1"><span>cow's milk</span></div>
							<div><input type="radio" name="q11" value="a2"><span>goat's milk</span></div>
							<div><input type="radio" name="q11" value="a3"><span>sheep's milk</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/cheese2.png" style="left: 187px; top: 115px;" />
					<div id="text" style="width: 349px; top: 28px;" >
						<h2 style="padding: 5px 15px;">Koja je Vaša omiljena vrsta sira?</h2>
						<form class="custom" style="padding-left: 120px;">
							<div><input type="radio" name="q11" value="a1"><span>kravlji</span></div>
							<div><input type="radio" name="q11" value="a2"><span>kozji</span></div>
							<div><input type="radio" name="q11" value="a3"><span>ovčji</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q11 -->
			
			<div id="q12">
				<div class="english" style="display:none;">
					<img src="img/apples.png" style="top: 119px; left: 240px;" />
					<div id="text" style="width: 190px; top: 27px;">
						<h2 style="padding-top: 10px;">Pick a fruit:</h2>
						<form class="custom" style="padding-left: 24px;">
							<div><input type="radio" name="q12" value="a1"><span>apples</span></div>
							<div><input type="radio" name="q12" value="a2"><span>figs</span></div>
							<div><input type="radio" name="q12" value="a3"><span>cherries</span></div>
							<div><input type="radio" name="q12" value="a4"><span>plums</span></div>
							<div><input type="radio" name="q12" value="a5"><span>berries</span></div>
						</form>
					</div>
					<img src="img/fig.png" style="z-index: 4; top: -68px; left: 511px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/apples.png" style="top: 119px; left: 240px;" />
					<div id="text" style="width: 282px; top: 27px;">
						<h2 style="padding-top: 5px;">Od voća najdraže su Vam:</h2>
						<form class="custom" style="padding-left: 57px;">
							<div><input type="radio" name="q12" value="a1"><span>jabuke</span></div>
							<div><input type="radio" name="q12" value="a2"><span>smokve</span></div>
							<div><input type="radio" name="q12" value="a3"><span>višnje</span></div>
							<div><input type="radio" name="q12" value="a4"><span>šljive</span></div>
							<div><input type="radio" name="q12" value="a5"><span>šumsko voće</span></div>
						</form>
					</div>
					<img src="img/fig.png" style="z-index: 4; top: -118px; left: 531px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q12 -->
			
			<div id="q13">
				<div class="english" style="display:none;">
					<img src="img/cake.png" style="left: 151px; top: 382px;"/>
					<div id="text" style="width: 340px; top: 19px;">
						<h2>What kind of desserts do you like?</h2>
						<form class="custom" style="padding-left: 20px; padding-bottom: 10px;">
							<div><input type="radio" name="q13" value="a1"><span>cakes and tortes</span></div>
							<div><input type="radio" name="q13" value="a2"><span>puddings and custards</span></div>
							<div><input type="radio" name="q13" value="a3"><span>fritters (beignets)</span></div>
							<div><input type="radio" name="q13" value="a4"><span>strudel</span></div>
							<div><input type="radio" name="q13" value="a5"><span>I don’t have sweet tooth</span></div>
						</form>
					</div>
					<img src="img/pudding.png" style="z-index: 4; left: 627px; top: -205px;"/>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/cake.png" style="z-index: 4; left: 175px; top: 385px;"/>
					<div id="text" style="width: 340px; top: 62px;">
						<h2>Kakve deserte volite?</h2>
						<form class="custom" style="padding-left: 50px; padding-bottom: 10px;">
							<div><input type="radio" name="q13" value="a1"><span>kolače i torte</span></div>
							<div><input type="radio" name="q13" value="a2"><span>pudinge i kreme</span></div>
							<div><input type="radio" name="q13" value="a3"><span>uštipke</span></div>
							<div><input type="radio" name="q13" value="a4"><span>štrudle</span></div>
							<div><input type="radio" name="q13" value="a5"><span>nisam baš za slatko</span></div>
						</form>
					</div>
					<img src="img/pudding.png" style="z-index: 4; left: 627px; top: -143px;"/>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q13 -->
			
			<div id="q14">
				<div class="english" style="display:none;">
					<img src="img/wine.png" style="top: 108px; left: 118px;"/>
					<div id="text" style="width: 398px; top: -70px; left: 10px;">
						<h2 style="width: 320px; padding-top: 10px; padding-left: 42px">Your favorite wine is:</h2>
						<form class="custom" style="padding-left: 10px;">
							<div><input type="radio" name="q14" value="a1"><span>white - light, refreshing and fruity</span></div>
							<div><input type="radio" name="q14" value="a2"><span>white - dry, rich and fresh</span></div>
							<div><input type="radio" name="q14" value="a3"><span>red - full and fresh with a fruity finish</span></div>
							<div><input type="radio" name="q14" value="a4"><span>red - rich, mature and strong</span></div>
							<div><input type="radio" name="q14" value="a5"><span>I prefer water</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/wine.png" style="top: 118px; left: 127px;"/>
					<div id="text" style="width: 398px; top: -70px; left: 10px;">
						<h2 style="padding-top: 7px;">Vaš omiljeni tip vina je:</h2>
						<form class="custom" style="padding-left: 5px;">
							<div><input type="radio" name="q14" value="a1"><span>bijelo - lagano, svježe, voćno</span></div>
							<div><input type="radio" name="q14" value="a2"><span>bijelo - suho, bogato i svježe</span></div>
							<div><input type="radio" name="q14" value="a3"><span>crno - puno, svježe, voćnog finiša</span></div>
							<div><input type="radio" name="q14" value="a4"><span>crno - bogato, zrelo i jako</span></div>
							<div><input type="radio" name="q14" value="a5"><span>radije pijem vodu</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q14 -->
			
			<div id="q15">
				<div class="english" style="display:none;">
					<img src="img/landscape.png"  style="left: 134px; top: 50px;"/>
					<div id="text" style="top: -44px; width: 370px; padding: 15px;">
						<h2 style="margin: 0;">What kind of setting stimulates your appetite the most?</h2>
						<form class="custom" style="padding-left: 80px;">
							<div><input type="radio" name="q15" value="a1"><span>by the sea</span></div>
							<div><input type="radio" name="q15" value="a2"><span>in the mountains</span></div>
							<div><input type="radio" name="q15" value="a3"><span>in the countryside</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .english -->
				<div class="croatian" style="display:none;">
					<img src="img/landscape.png"  style="left: 155px; top: 74px;"/>
					<div id="text" style="top: -44px; width: 305px;">
						<h2 style="padding-top: 5px;">Koji ambijent <br/> Vam najviše potiče apetit?</h2>
						<form class="custom" style="padding-left: 35px;">
							<div><input type="radio" name="q15" value="a1"><span>uz more</span></div>
							<div><input type="radio" name="q15" value="a2"><span>u planininama</span></div>
							<div><input type="radio" name="q15" value="a3"><span>u seoskom okruženju</span></div>
						</form>
					</div>
					<!-- end #text -->
				</div> <!-- end .croatian -->
			</div> <!-- end #q15 -->
			
		</div><!-- end #question -->
		
		<!-- ending questions -->
		
		<div id="error">
		</div>
		<section id="next" style="display: none;">
			<h2></h2>
			<img src="img/arrow01.png" />
		</section>
	</section>
	
	<footer>
		<section id="ornament01"></section>
		<section id="ornament02"></section>
		<section id="ornament03"></section>
	</footer>
<?php
	include('footer.php');
?>