<body>
    <h1>Proiecte</h1>

    <div>
        <ul>
            @foreach ($projects as $project)
                <li>
                    <div>
                        <div>
                            <img src="{{ $project->image }}" alt="{{ $project->name }}">
                        </div>
                        <h3>{{ $project->name }}</h3>
                        <p>{{ $project->description }}</p>
                        <div class="d-flex">
                            <a href="{{ route('project.show', $project->id) }}" class="btn">View</a>

                            @if ($project->url != null)
                                <a href="{{ $project->url }}" class="btn">Go to website</a>
                            @endif
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>