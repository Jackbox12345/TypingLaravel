<x-layout>
    
        <header class="text-center">
            <h2>Status : {{$typingStatus}}</h2>
            <h2 class="text-2xl font-bold uppercase mb-1">
                    Typing Test
            </h2>
            <p class="mb-4">Click the first letter to start the game</p>
            
        </header>
        <link rel="stylesheet" href="{{ asset('css/typingtest.css') }}">
        <form method="POST" action="/typing">

            <div class="wrapper">
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
                        <input  name="wpm" id="wpm1" >
                        <input type="hidden" name="cpm" id="cpm1" >
                        <input type="hidden" name="inpm" id="chpm">
                        <a  class="" id="refresh" onclick="refresh()">refresh</a>
                    </div>
                </div>
            </div>  
            <button id="myButton" style = "display: none">Submit</button>

            </form>

    <script src="{{asset('js/paragraphs.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        function refresh(){
            location.reload();
        }
    
    </script>
</x-layout>