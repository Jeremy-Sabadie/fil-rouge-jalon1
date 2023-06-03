<fieldset>
        <legend>mettre à jour le status du ticket n°{{$ticket->id}}</legend>

        <form action="" method="post">

                <span style="display: flex;flex-direction:row;">
                    <div>
                        <label for="no">ouvert</label>
                        <input type="radio" name="open" id="open" value="" checked="checked">
                            <label for="done">résolu</label>
                            <input type="radio" name="done" id="done">
                    </div>
                                <button type="submit" >mettre à jour</button>
                </span>
        </form>
    </fieldset>
