<fieldset>
        <legend>mettre à jour le status du ticket n°{{$ticket->id}}</legend>

        <form action="{{route('maj_status', ['idTicket'=>$ticket->id])}}" method="post">
                    @csrf
                <span style="display: flex;flex-direction:row;">
                    <div>
                        <label for="no">ouvert</label>
                        <input type="radio" name="status" id="open" value="0" checked="checked">
                            <label for="done">résolu</label>
                            <input type="radio" name="status" value="1" id="done">
                    </div>
                                <button type="submit" >mettre à jour</button>
                </span>
        </form>
    </fieldset>
