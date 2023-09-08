<x-layout>
    
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                    Typing Test
            </h2>
            <p class="mb-4">Click the first letter to start the game</p>
        </header>
        <link rel="stylesheet" href="{{ asset('css/typingtest.css') }}">
            <div class="wrapper">
                <form method="POST" action="/typing">
                @csrf
                <input type="text" class="input-field">
                <div class="content-box">
                <div class="typing-text">
                    <p></p>
                </div>
              
                <div class="content">
                    <ul class="result-details">
                    <li class="time">
                        <p>Time Lefasdast:</p>
                        <span><b>60</b>s</span>
                    </li>
                    <li class="mistake">
                        <p>Mistakes:</p>
                        <span>0</span>
                    </li>
                    <li class="wpm">
                        <p>WPM:</p>
                        <span>0</span>
                    </li>
                    <li class="cpm">
                        <p>CPM:</p>
                        <span>0</span>
                    </li>
                    </ul>
                    <input type="hidden" name="user_id" value = "{{auth()->user()->id}}">
                    <input type="hidden" name="mistake" id="mistake1">
                    <input type="hidden" name="wpm" id="wpm1">
                    <input type="hidden" name="cpm" id="cpm1">
                    <button>Submit</button>
                </div>
                </div>
            </form>
            </div>  
    <script src="js/paragraphs.js"></script>
    <script src="js/script.js"></script>
</x-layout>