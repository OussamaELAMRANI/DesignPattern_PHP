 # Design Patterns - Adapter Pattern

- Adapter pattern works as a **bridge** between _two incompatible interfaces_.
- This type of design pattern comes under **structural pattern** 
   as this pattern combines the capability of two _independent interfaces_.


# EXEMPLE IN THE REAL WORD
<img src="https://images-na.ssl-images-amazon.com/images/I/51ofknKjvBL._AC_SL1001_.jpg" height="200"/>

- To connect some materials to your PC, you need un **Adapter** to make that possible

<hr>

We have a _MediaPlayer_ interface and a concrete class **AudioPlayer** implementing the _MediaPlayer_ interface. 
**AudioPlayer** can play mp3 format audio files by default.

We are having another interface **AdvancedMediaPlayer** and concrete classes implementing the _AdvancedMediaPlayer_ interface. 
These classes can play vlc and mp4 format files.

We want to make **AudioPlayer** to play other formats as well. 
To attain this, we have created an adapter class **MediaAdapter** which implements the _MediaPlayer_ interface and uses _AdvancedMediaPlayer_ objects to play the required format.

**AudioPlayer** uses the adapter class **MediaAdapter** passing it the desired audio type without knowing the actual class which can play the desired format.


<img src="https://www.tutorialspoint.com/design_pattern/images/adapter_pattern_uml_diagram.jpg" height="200"/>
