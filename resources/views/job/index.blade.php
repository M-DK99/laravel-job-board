<div>
    <h1>Job Board</h1>
    <h2>Hi {{ $name }}</h2>
    @foreach ($jobs as $job)
        <div> 
        your Job Is {{ $job['title'] }} And Your Salary Is  {{ $job['salary'] }}
        </div>
    @endforeach
</div>
