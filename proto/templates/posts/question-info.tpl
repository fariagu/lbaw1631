<div id="for-margin-purposes">
    <div id="question-space" class="container-fluid">
        <h1>{$question.title}</h1>
        <div>
            <p>{$question.rating} votes</p>
            <a href="{$BASE_URL}pages/user/profile.php?id={$question.id_author}" class="list-group-item">{$question.author_name}</a>
			<a href="{$BASE_URL}pages/categories/category.php?id={$question.id_category}" class="list-group-item">{$question.category_name}</a>
        </div>
		<p id="question-body">{$question.description}</p>
    </div>    
</div>

<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 id="topic-title">Answers</h2>
				<div class="panel panel-default" id="correctAnswer">
					<a href="../profile" class="list-group-item">homesblouse</a>
					<div class="panel-body">You could replace that "int data[] = new int[10]" by "int data[]". You are wasting memory there</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">airhost</a>
					<div class="panel-body">I agree!</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">gritlumpish</a>
					<div class="panel-body">Good solution!</div>
				</div>
				<div class="panel panel-default" id="answerComment2">
					<a href="../profile" class="list-group-item">fellowbawd</a>
					<div class="panel-body">Thanks</div>
				</div>
				<div class="panel panel-default" id="answerComment">
					<a href="../profile" class="list-group-item">ferrariswimmer</a>
					<div class="panel-body">I agree!</div>
				</div>
				<div class="panel panel-default">
					<a href="../profile" class="list-group-item">bobbyvanilla</a>
					<div class="panel-body">Example :

int [] points = new int[]{ 1,2,3,4 };</div>
				</div>
			</div>
		</div>
	</div>
</div>