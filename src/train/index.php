<?php

$META_TITLE = 'Training Battle';

$META_DESCRIPTION = 'Select your team and practice battling against an AI.';


require_once '../header.php';
?>
<h1>Training Battle</h1>
<div class="section home white">
	<p>Select your team and options below to battle in a real-time simulation against a CPU opponent.</p>
	<p>This tool is a training and learning resource intended to supplement your in-game battles. Experiment with new lineups or practice in a pressure free environment against a difficulty of your choice!</p>
</div>

<div class="hide">
	<?php require '../modules/pokeselect.php'; ?>
</div>

<div class="section poke-select-container train">
	<div class="poke">
		<h3>Your Team</h3>
		<?php require '../modules/pokemultiselect.php'; ?>
		<a class="random" href="#">Random</a>
	</div>

	<div class="poke ai-options">
		<h3>Settings</h3>
		<div class="poke-stats">
			<select class="mode-select">
				<option value="single">Single (3v3)</option>
				<option value="tournament">Tournament (6v6)</option>
			</select>
			<h3 class="section-title">League &amp; Cup</h3>
			<select class="league-cup-select">
				<option value="1500 all">Great League</option>
				<option value="2500 all">Ultra League</option>
				<option value="10000 all">Master League</option>
				<option value="1500 jungle">Jungle Cup</option>
				<option value="1500 rainbow">Rainbow Cup</option>
				<option value="1500 regionals-1">Season 1 Regionals</option>
				<option value="1500 nightmare">Nightmare Cup</option>
				<option value="1500 kingdom">Kingdom Cup</option>
				<option value="1500 tempest">Tempest Cup</option>
				<option value="1500 twilight">Twilight Cup</option>
				<option value="1500 boulder">Boulder Cup</option>
			</select>
			<h3 class="section-title">Difficulty</h3>
			<select class="difficulty-select">
				<option value="0">Novice</option>
				<option value="1">Rival</option>
				<option value="2">Elite</option>
				<option value="3">Champion</option>
			</select>
			<h3 class="section-title">Team Selection</h3>
			<select class="team-method-select">
				<option value="random">Random</option>
				<option value="manual">Manual</option>
			</select>
			<?php require '../modules/pokemultiselect.php'; ?>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="section">
	<button class="battle-btn button">Battle</button>
</div>

<div class="section team-select">
	<div class="opponent">
		<h3 class="center">Opponent's Roster</h3>
		<div class="roster pokemon-container"></div>
	</div>
	<h3 class="center">vs.</h3>
	<div class="self">
		<h3 class="center">Your Roster</h3>
		<div class="roster pokemon-container"></div>
		<p class="center">Select and order your team of 3 for battle!</p>
		<h4 class="center">Current Round: <span class="round-record"></span></h4>
	</div>
	<button class="lets-go-btn button">Let's Go!</button>
</div>

<div class="section battle">
	<div class="battle-window">
		<img class="img-block" src="<?php echo $WEB_ROOT; ?>img/train/battle-window-block.png" />
		<?php require_once 'modules/top.php'; ?>
		<?php require_once 'modules/scene.php'; ?>
		<?php require_once 'modules/controls.php'; ?>

		<div class="countdown">
			<div class="text"></div>
		</div>

		<div class="animate-message">
			<div class="text"></div>
		</div>

		<?php require_once 'modules/end-screen.php'; ?>
	</div>
</div>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Player.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingSetupInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/BattleInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/DecisionOption.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingAI.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineAction.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TeamRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/MatchHandler.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once '../footer.php'; ?>