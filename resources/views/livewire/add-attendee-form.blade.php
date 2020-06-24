<div>
    @if ($flag == 0)
      <button type="button" class="btn btn-outline-primary" wire:click="add">Add Attendee</button>
    @else
      <button type="button" class="btn btn-outline-danger" wire:click="remove">Remove Attendee</button>
    @endif

    <br />
    <br />

    @if ($flag == 1)
      @livewire('tours-attendee')
    @endif
</div>
