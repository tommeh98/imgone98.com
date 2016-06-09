@extends('master')
@section('title', 'Home')

@section('content')

<div id="post">
    <p> I am writing <a href="">this post</a> to help <b>visualize</b> the design of the content of my other blog posts! Yes, <b>I am</b> intending this to stay and be the first actual post on my website blog. 
    </p>
    <p>
    Here we go! As you can see <a href="">this</a> link appears the same green color as the rest of the website. So does the <b>bold</b> text. The link is also underlined to tell you it is a clickable link.  </p><p>
    I will use the college I am going to attend as an example for abbreviations. My college of choice is <abbr title="Western Kentucky University">WKU</abbr>. As you can see it is <u>underlined</u> with the normal green color and wavy. If you hover your mouse over the text for a few seconds you will see what the abbreviation stands for. The <u>underlined</u> part is simply a green line under the text.
    </p> 

    <h4><u>TODO</u></h4>
    <ul>
        <li><span>Address</span></li>
        <li><span>Tons of other stuffs</span></li>
        <li><span>Make table look better</span></li>
        <li><span>Citations</span></li>
        <li><span>Font and Basic Text Fixes</span></li>
        <li><span>Description Lists</span></li>
    </ul>

    <p> Lets try a <b>blockquote</b>, I'm sure I'll use plenty of those. </p>

    <blockquote cite="HAHAHAHAHA">
        <p>I am a blockquote. I have the double border on the left of me and I am displayed in italics. </p>
        <footer> - <a href="">I belong to myself</a></footer>
    </blockquote>

    <p> I like it, how about a table </p>

    <table>
        <caption> I Am a Caption. </caption>
        <thead>
            <tr>
                <th> Header 1 </th>
                <th> Header 2 </th>
                <th> Header 3 </th>
            </tr>
        </thead>
        <tbody>
            <tr> 
                <td> Content 1 </td>
                <td> Content 2 </td>
                <td> Content 3 </td>
            </tr>
            <tr> 
                <td> Content 4 </td>
                <td> Content 5 </td>
                <td> Content 6 </td>
            </tr>
            <tr> 
                <td> Content 7 </td>
                <td> Content 8 </td>
                <td> Content 9 </td>
            </tr>
        </tbody>
    </table>

    <p> I'm going to have to play with tables more when I actually need it for something. The way it looks will probably depend more on the content of the table. </p>

    <p> I'll probably end up needing a lot of citations so here is a made-up one. <cite>My Website</cite> by Timothy Ford. Created in 2016. Kinda confusing... adding to todo list and moving on for now. </p>

    <p> The code and pre tag, here's a snippet of code in java.</p>

    <code><pre>
public class HelloWorld {

    public static void main(String[] args) {
        // Prints "Hello, World" to the terminal window.
        System.out.println("Hello, World");
    }

}
</pre></code>


</div>

@endsection