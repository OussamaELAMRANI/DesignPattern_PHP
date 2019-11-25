# Design Patterns - Flyweight Pattern

Flyweight pattern is primarily used to reduce the number of objects created and to decrease memory footprint and increase performance

This type of design pattern comes under **structural pattern** as this pattern provides ways to decrease object count thus improving the object structure of application.

Flyweight pattern tries to reuse already existing similar kind objects by storing them and creates new object when no matching object is found. We will demonstrate this pattern by drawing 20 circles of different locations but we will create only 5 objects. Only 5 colors are available so color property is used to check already existing Circle objects.

<img src="https://www.tutorialspoint.com/design_pattern/images/flyweight_pattern_uml_diagram.jpg" />