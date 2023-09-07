<x-layout>
    
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                    Typing Test
            </h2>
            <p class="mb-4">Click the first letter to start the game</p>
        </header>
        <link rel="stylesheet" href="{{ asset('css/typingtest.css') }}">
            <div class="wrapper">
                <input type="text" class="input-field">
                <div class="content-box">
                <div class="typing-text">
                    <p></p>
                </div>
                <div class="content">
                    <ul class="result-details">
                    <li class="time">
                        <p>Time Left:</p>
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
                    <button>Submit</button>
                </div>
                </div>
            </div>  
    <script src="js/paragraphs.js"></script>
    <script src="js/script.js"></script>
</x-layout>