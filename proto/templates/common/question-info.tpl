<div id="for-margin-purposes">
    <div id="question-space" class="container-fluid">
        <h1>How to initialize an array in Java?</h1>
        <div>
            <p>327 upvotes</p>
            <a href="../profile" class="list-group-item">joaozinho</a>
			<a href="../category" class="list-group-item">Programming</a>
        </div>
		<p id="question-body">I am initializing an array data like this :

public class Array {<br>
<br>
    int data[] = new int[10]; <br>
    /** Creates a new instance of Array */<br>
    public Array() {<br>
        data[10] = {10,20,30,40,50,60,71,80,90,91};<br>
    }<br>
<br>
}<br>
NetBeans points an error at the line<br>
<br>
data[10] = {10,20,30,40,50,60,71,80,90,91};<br>
How can I solve the problem?</p>
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
				<div class="panel panel-default">
					<a href="../profile" class="list-group-item">merrylegs</a>
					<div class="panel-body">Try data = new int[] {10,20,30,40,50,60,71,80,90,91 };</div>
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