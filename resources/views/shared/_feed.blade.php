@if (count($feed_items))
<ol class="statuses">
  @foreach ($feed_items as $status)
    @include('statuses._status', ['user' => $status->user])
    <hr>
  @endforeach
  {!! $feed_items->render() !!}
</ol>
@endif