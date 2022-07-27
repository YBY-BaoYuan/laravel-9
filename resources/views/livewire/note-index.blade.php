<div>
    @foreach($notes as $note)
{{--        {{ $note->body }}--}}
{{--        <hr>--}}
        <livewire:note-single :note="$note"/>
    @endforeach
</div>
