<!--CONTACT-->
        
<div class="light container-small">
        
    <div id="contact">

        <form method="POST" action="/send">

            @csrf
            
            <p class="light-text">I am currently available for hire. If you would like to work with me or have any quesions of comments about my work, please don't hesitate to send me a message.</p>

            <div class="form-input">

                <input type="text"
                        name="sender"
                        placeholder="Email Address">
            </div>

            <div class="form-input">

                <textarea name="content"
                          placeholder="Message"></textarea>
            </div>

            <input type="submit"
                    class="button"
                    value="Send">

        </form>

    </div>
    
</div>