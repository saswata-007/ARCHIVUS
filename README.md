ARCHIVUS

A Historical Blogging 
Web-Application



By

Achirangshu Srimani ()
Rahit Kumar Makhal ()
Saswata Kayal ()








B.Sc. (Hons.) in Computer Science
UNIVERSITY OF CALCUTTA
2024














The Project entitled “ARCHIVUS”, submitted by 
 
	Achirangshu Srimani
	Rahit Kumar Makhal
	Saswata Kayal 

Under the guidance of Prof. Smt. Piu Bera, Lecturer, Sarsuna College, Sarsuna. This project is submitted in partial fulfilment of the requirement for the B.Sc. (Hons.) in Computer Science under the University of Calcutta. 
 
 
 
 
 
 
Sarsuna College. 4, Sarsuna College, Ho Chi Minh Sarani Behala, HB/A, Street No. 192, Upanagari, Sarsuna, Kolkata, West Bengal 700061





CERTIFICATE
 
This is to certify that this Project entitled “ARCHIVUS” is a bonafide record of work done by –  
Mr. Achirangshu Srimani (Roll no. , Reg. no.) 

Mr. Rahit Kumar Makhal (Roll no., Reg. no. ) 

Mr. Saswata Kayal (Roll no., Reg. no.) 

Under my guidance and supervision and submitted in partial fulfilment of the requirements for the paper CC-13-P of 6th Semester B.Sc. (Honours) degree in Computer Science by the University of Calcutta. These candidates have completed the total parameters and requirements of the entire project and I wish them a very successful future. 
 
 
 
 
 
 
INTERNAL EXAMINER  :- Professor Piu Bera.
 
 
 
 
EXTERNAL EXAMINER :- Professor 



ACKNOWLEDGEMENT
 
 	It is our prime duty to express our sincere gratitude to all those who have helped us to Complete this project successfully. We want to express our respectful and sincere thanks to our respected and honourable project guide Professor Piu Bera, Department of Computer Science, Sarsuna College for the valuable co-operation, guidance and continuous  support rendered by her throughout our project work. 
 	 
 	We would also like to express our heartfelt thanks to Professor Krishna Daripa , Dept co-ordinator along with other respected department professors, staff and all other classmates for providing us with needful advises and support for the completion of this project. 
 
 
 Signature:

 
1. _____________________________________
 

2. _____________________________________








Table of Contents
Topics                                                         Page No.
1. Introduction                                                       ()
	Modules
	Comparison Between Other System and Our System 
	Objective of the project
	Scope of the project
2. Background and Review of Related Work   ()
	Hardware and Software Requirements
	Technology Used
•	HTML
•	CSS
•	PHP
•	MySql
•	CodeIgnitor
•	PhpMyAdmin
•	Xampp
	Introduction to SDLC
•	SDLC Models
•	Spiral Model
•	Advantages of Spiral Model
•	Disadvantages of Spiral Model
3. Methodology                                                        ()
	SDLC
•	SDLC Models
•	Iterative Waterfall Model
•	Application of Iterative Waterfall Model
•	Advantages of using Iterative Waterfall Model
•	Disadvantages of using Iterative Waterfall Model
•	Development Schedule
	System Design
•	Output design
•	Input Design
•	Input Media
•	Form Type
•	Form Layout
	Functional Flowchart
	Database Design
•	Importance of Database Design
•	Entity
o	Types of Entities
•	Attributes
o	Types of Attributes
•	Keys
•	Relationship
•	Mapping Cardinalities
	Normalization
	ER Diagram
	Data Dictionary
	Process Design
	Data Flow Diagram
•	Symbols Used in a DFD
•	DFD for Our System
o	Level 0 Data Flow Diagram
o	Level 1 Data Flow Diagram 
o	Level 2 Data Flow Diagram of Admin
o	Level 2 Data Flow Diagram of Employee
o	Level 2 Data Flow Diagram of  User
	Use Case Diagram
4. Implementation                                                ()
	Testing
•	Test Planning
•	Testing Methods Used for Project
o	Black-box Testing
o	White-box Testing
o	Performance Testing
o	Reliability Testing
o	Security testing
	Maintenance
•	Corrective Maintenance
•	Adaptive Maintenance
•	Perfective Maintenance
•	Process
•	Models
	Coding
	Snap-Shots
	Future Scope
5. Conclusion                                                       ()
6. Bibliography                                                    ()






















INTRODUCTION:
In an era dominated by information, the need for a platform that efficiently curates and disseminates historical knowledge is more pressing than ever. Our project, a sophisticated blog website, endeavours to bridge the gap between users and historical events by providing a dynamic space where enthusiasts can explore, contribute, and engage with content tailored to their specific fields of interest.

Modules:
 1.User Authentication:
	Secure login functionality ensures user privacy and personalization.
	Profile creation enables users to customize their preferences and maintain a history of their engagements.
	User Registration: 
Users can create an account on the website by providing their email address, username, and password.
	User Profile: 
Each user will have a profile where they can add a profile picture, bio, and interests.
 
2.Content Categorization:
	Blogs are categorized based on historical events, allowing users to easily navigate through topics of their interest.
	Advanced tagging system for precise content filtering and discovery.
	Categories: 
Blogs will be categorized based on their content, and users can browse blogs by category.
 


3.Multimedia Integration:
	Support for a diverse range of content types, including text, images, and documents, enriching the user experience.
	Seamless integration of multimedia elements within blogs enhances the storytelling aspect of historical events.
 
4.Search and Recommendation Engine:
	Robust search functionality empowers users to find specific blogs efficiently.
	Recommendation engine leverages user preferences, historical engagement data, and trending topics to suggest relevant content.
	Tags: 
Blogs will be tagged with relevant keywords, and users can search for blogs based on tags.
	Date: 
Blogs will be displayed based on the date they were posted, and users can browse blogs by date.
 
5.Collaborative Features:
	Users can contribute to the platform by creating and sharing their own blogs, fostering a sense of community.
	Commenting and liking features promote engagement and discussion around historical narratives.
	Commenting and liking features promote engagement and discussion around historical narratives.
	Blog Creation: 
Users can create blogs on historical events in various fields such as politics, science, technology, art, and culture.
	Blog Search: 
Users can search for blogs based on keywords, categories, and dates.
	Dashboard:
The dashboard page providing access to various sections and features of the platform.
•	User:
Registered users/authors can upload blogs and edit their profile or previously uploaded blogs.
•	Admin/Moderator:
For admin and moderator in dashboard there will be a similar structured page where they can manage existing blog, user, comment, make new moderator, provide support and solve various user asked queries .
	Blog Display: 
Each blog will be displayed with a title, image, summary, and link to the full blog post.
	User Comments: 
Users can comment on blog posts, and the comments will be displayed below the blog post.
	User Ratings: 
Users can rate blog posts on a scale of 1 to 5, and the average rating will be displayed on the blog post.


6.Responsive Design:
The website is optimized for various devices, ensuring a consistent and user-friendly experience across desktops, tablets, and mobile devices.

Comparison Between Other System and Our System:
•	Traditional System vs Our Website:
The proposed blog website project offers several key differences from manual systems for accessing historical information:
1.Accessibility and Convenience:
Unlike manual systems where accessing historical information often requires physical access to libraries, archives, or specialized collections, the blog website provides instant and convenient access to a vast repository of historical content from any internet-connected device.
2.Multimedia Integration:
While manual systems primarily rely on text-based documents, the blog website incorporates multimedia elements such as images and documents alongside textual content. This enriches the user experience, offering a more immersive and comprehensive exploration of historical events.
3.Interactivity and Collaboration: 
Manual systems often lack mechanisms for user interaction and collaboration. In contrast, the blog website facilitates engagement through features like commenting, liking, and user-generated content creation, fostering a sense of community among history enthusiasts.
4.Search and Recommendation Capabilities: 
Manual systems may rely on manual indexing or cataloging methods, making it challenging to efficiently search for relevant information. The blog website, however, employs robust search functionality and recommendation algorithms, enabling users to easily discover and explore content based on their interests and browsing history.
5.Real-Time Updates: 
Manual systems are typically static and may not reflect the latest developments or research in the field of history. The blog website can be continuously updated with new blogs and curated content, ensuring users have access to the most current information and perspectives on historical events.

Overall the blog website project offers a modern, user-friendly, and dynamic alternative to traditional manual systems for accessing historical information, enhancing accessibility, personalization, interactivity, and the overall user experience.




•	Similar Website vs Our Website:
The proposed blog website project differentiates itself from other online systems in several distinct ways:
1.Focused Content Curation: 
Unlike broad online systems that cover a wide range of topics, the blog website specializes in historical events. It offers curated content specifically tailored to users' interests in historical narratives, providing a more targeted and immersive experience.
2.Community Engagement and Collaboration: 
Unlike static repositories like online encyclopedias, the blog website fosters a sense of community among users. Features such as commenting, liking, and user-generated content creation encourage interaction, collaboration, and discussion around historical topics.
3.Tailored Search and Recommendation Features: 
While general online systems may offer basic search functionality, the blog website implements advanced search algorithms tailored specifically for historical content. Additionally, its recommendation engine suggests relevant blogs based on user preferences and browsing history, facilitating serendipitous discoveries and deeper engagement with historical narratives.

In summary, the blog website project distinguishes itself from other online systems by offering a focused, personalized, interactive, and multimedia-rich platform dedicated to the exploration and discussion of historical events.







Objective:
The main objective of the project on Online Blogging System is to manage the details of archival Blogs, comments, historical dates, new blogs. It manages all the information about blogs, comments. The project is totally built at administrative end and thus only administrator is to build an application program to reduce the manual work for managing   blogs, comments. It tracks all the details.  
	Create a user-friendly interface that allows users to search and access blogs based on historical events.

	Provide a platform for users to share their knowledge and interests in various fields related to historical events.

	Offer a unique and engaging way for users to learn about historical events and their significance.

	Encourage critical thinking and analysis of historical information.

	Create a community of history enthusiasts through personalized recommendations and potential future social features.

	Provide a platform for those newspaper cutting enthusiast to share their own collection of historically significant events.




BACKGROUND AND REVIEW OF RELATED WORK:

Hardware And Software Requirements:

	Software Requirements:
Platform: Windows 7 or higher.
Web Browser: Chrome, Microsoft Edge, or any other suitable browser.
	Hardware Requirements:
RAM: 4.00 GB
CPU: Intel® Core™2 Duo Processor E6300
GRAPHICS: Integrated Graphics.
Internet connectivity for accessing online features 

Used:
RAM:  8.00 GB
CPU: Intel(R) Core (TM) i5-11300H CPU @ 3.1GHz  - 4.4GHz
GRAPHICS: NVIDIA GeForce GTX 1650 4GB GDDR6
STORAGE: 512 GB SSD
Platform: Windows 11 Home 
Source Code Editor: Visual Studio Code
Programming Language: HTML, CSS, PHP, MySQL



Technology Used:

1.HTML (Hyper Text Markup Language):
HTML (Hyper Text Markup Language) is the most basic building block of the Web. It defines the meaning and structure of web content. It is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript. Web browsers receive HTML documents from a web server or local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document. HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page.
HTML supports almost all browsers around the globe. HTML is very easy to edit as there is no need to have a special interface or platform to edit it. It is written in simple Notepad and hence can be simply edited in any text editor like Notepad, Notepad++, etc. Provide common Logic between all the pages; instead of writing the same style logic in each HTML page, we use a CSS file for writing common logic. And include this CSS page in each html page with a tag. Web controls produce segments of HTML and JavaScript which form part of the resulting page sent to the end-user's browser.
HTML can embed programs written in a scripting language such as JavaScript, which affects the behavior and content of web pages. The inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), former maintainer of the HTML and current maintainer of the CSS standards, has encouraged the use of CSS over explicit presentational HTML since 1997. A form of HTML, known as HTML5, is used to display video and audio, primarily using the <canvas> element, together with JavaScript.
In 1980, physicist Tim Berners-Lee, a contractor at CERN, proposed and prototyped ENQUIRE, a system for CERN researchers to use and share documents. In 1989, Berners-Lee wrote a memo proposing an Internet-based hypertext system. Berners-Lee specified HTML and wrote the browser and server software in late 1990. That year, Berners-Lee and CERN data systems engineer Robert Cailliau collaborated on a joint request for funding, but the project was not formally adopted by CERN. In his personal notes of 1990, Berners-Lee listed "some of the many areas in which hypertext is used"; an encyclopedia is the first entry.
 The first publicly available description of HTML was a document called "HTML Tags", first mentioned on the Internet by Tim Berners-Lee in late 1991. It describes 18 elements comprising the initial, relatively simple design of HTML. Except for the hyperlink tag, these were strongly influenced by SGMLguid, an in-house Standard Generalized Markup Language (SGML)-based documentation format at CERN. Eleven of these elements still exist in HTML 4.

2. CSS (Cascading Style Sheet):
Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript. 
Filename extension: .css 
Internet media type: text/css 
Type code: TEXT Uniform Type Identifier (UTI): public.css 
Developed by: World Wide Web Consortium (W3C) 
Initial release: December 17, 1996 
Latest release: CSS 2.1 : Level 2 Revision 1 (April 12, 2016) 
Type of format: Style sheet language 
Container for: Style rules for HTML elements (tags) 
Contained by: HTML documents 
Each web browser uses a layout engine to render web pages, and support for CSS functionality is not consistent between them. Because browsers do not parse CSS perfectly, multiple coding techniques have been developed to target specific browsers with workarounds (commonly known as CSS hacks or CSS adoption of new functionality in CSS can be hindered by lack of support in major browsers. For example, Internet Explorer was slow to add support for many CSS 3 features, which slowed the adoption of those features and damaged the browser's reputation among developers. In order to ensure a consistent experience for their users, web developers often test their sites across multiple operating systems, browsers, and browser versions, increasing development time and complexity. Tools such as BrowserStack have been built to reduce the complexity of maintaining these environments. Advantages of CSS: 
• Site-wide consistency: When CSS is used effectively, in terms of inheritance and "cascading," a global style sheet can be used to affect,ct, and style elements site-wide.
 If the situation arises that the styling of the elements should need to be changed or adjusted, these changes can be made by editing rules in the global style sheet. Before CSS, this sort of maintenance was more difficult, expensive, and time-consuming. 
• Bandwidth: A stylesheet, whether internal to the source document or separate, will specify the style once for a range of HTML elements selected by class, type, or relationship to others. This is much more efficient than repeating style information inline for each occurrence of the element. An external stylesheet is usually stored in the browser cache, and can therefore be used on multiple pages without being reloaded, further reducing data transfer over a network. 
• Page reformatting: With a simple change of one line, a different style sheet can be used for the same page. This has advantages for accessibility, as well as providing the ability to tailor a page or site to different target devices. Furthermore, devices not able to understand the styling still display the content.

3. PHP (Hypertext Preprocessor):
PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is , now produced by The PHP Group. PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor. PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon, or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications and robotics drone control. PHP code can be directly executed from the command line. PHP files can contain text, HTML, CSS, JavaScript, and PHP code. PHP code is executed on the server, and the result is returned to the browser as plain HTML. PHP files have the extension “.php”. PHP can generate the dynamic page content. PHP can create, open, read, write, delete, and close files on the server. PHP can collect form data. PHP can send and receive cookies. PHP can add, delete, and modify data in a database. PHP can be used to control user access. PHP can encrypt data. With PHP one is not limited to outputting HTML. One can output images, PDF files, Flash movies, and any text, such as XHTML and XML. 
PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.). It is compatible with almost all servers used today (Apache, IIS, etc.). It supports a wide range of databases. PHP is free, easy to learn, and runs efficiently on the server side.

4.MySQL:
MySQL is an open-source relational database management system [RDBMS]. Its name is a combination of “My”, the name of co-founder Michael Widenius’s daughter and “SQL”, the abbreviation for Structured Query Language. A relational database organizes data into one or more data tables in which data types may be related to each other; these relations help structure the data. SQL is a programming language use to create, modify and extract data from the relational database, as well as control user access to the database. In addition to relational databases and SQL, an RDBMS like MySQL works with an operating system to implement a relational database in a computer’s storage system, manages users, allows for network access and facilitates testing database integrity and creation of backups. MySQL is free and open-source software under the terms of the GNU General Public License, and is also available under a variety of proprietary licenses. MySQL was owned and sponsored by the Swedish company MySQL AB, which was bought by Sun Microsystems (now Oracle Corporation). In 2010, when Oracle acquired Sun, Widenius forked the open-source MySQL project to create Maria DB. MySQL has stand-alone clients that allows users to interact directly with a MySQL database using SQL, but more often, MySQL is used with other programs to implement applications that need relational database capability. MySQL is a component of the LAMP web application software stack (and others).

5. PhpMyAdmin:
PhpMyAdmin is a free and open-source administration tool for MySQL and Maria DB. As a portable web application written primarily in PHP, it has become one of the most popular MySQL administration tools, especially for web hosting services. Tobias Ratschiller, then an IT consultant and later founder of the software company Maguma, started to work on a PHP-based web front end to MySQL in 1998, inspired by MySQL-Web admin. He gave up the project in 2000 because of lack of time. By that time, phpMyAdmin had already become one of the most popular PHP applications and MySQL administration tools, with a large community of users and contributors. In order to coordinate the growing number of patches, a group of three developers (Olivier Muller, Marc Delisle and Loic Chapeaux) registered the phpMyAdmin project at Source-Forge and took over the development in 2001. In July 2015, the main website and the downloads left Source-Forge and moved to a content delivery network. At the same time, the releases began to be PGP-signed. Afterwards, issue tracking moved to GitHub and the mailing lists migrated. Before version 4, which uses Ajax extensively to enhance usability, the software used HTML frames. Features provided by the program include:
	Web interface 
	MySQL database management 
	Import data from CSV, jQuery and SQL 19 
	Export data to various formats: CSV, SQL, XML, jQuery, PDF (via the TCPDF library), ISO/IEC 26300 – Open Document Text and Spreadsheet, Word, Excel, SQL, and others 
	Administrating multiple servers
	Creating complex queries using query-by-example (QBE)
	Creating PDF graphics of database layout 
	Searching globally in a database or a subset of it 
	Live charts to monitor MySQL server activity like connections, processes, CPU/memory usage, etc 
	Network traffic to the SQL server 
	Make complex SQL queries easier


6. INTRODUCTION TO XAMPP:
XAMPP is a free and open source cross platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, Maria DB database, and interpreters for scripts written in the PHP and Perl programming languages. Since most actual web server deployments use the same components as XAMPP, it makes transitioning from a local test server to a live server possible. XAMPP’s ease of deployment means a WAMPP or LAMP stack can be installed quickly and simply on an operating system by a developer. XAMPP is regularly updated to the latest releases of Apache, Maria DB, PHP, and Perl. It also comes with a number of other modules including OpenSSl, phpMyAdmin, Media Wiki, Joomla, Word Press and more. Self-contained, multiple instances of XAMPP can exist on a single computer, and any given instance can be copied from one computer to another. XAMPP is offered in both a full and a standard version. 23 The most obvious characteristic of XAMPP is the ease at which a WAMP webserver stack can be deployed and instantiated. XAMPP also provides support for creating and manipulating databases in Maria DB and SQLite among others. Once XAMPP is installed, it is possible to treat a localhost like a remote host by connecting using an FTP client. Using a program like FileZilla has many advantages when installing a content management system (CMS). It is also possible to connect to localhost via FTP with an HTML editor.














Methodology:

Software Development Life Cycle:
 
Software Development Life Cycle (SDLC) is a process followed for a software project, within a software organization. It consists of a detailed plan describing how to develop, maintain, replace and alter or enhance specific software. SDLC defines a methodology for improving the quality of software and the overall development process. 
The traditional development methodology called Systems Development Life Cycle (SDLC) consists of a set of development activities that have a prescribed order. Once a problem for the existing Jaico Payroll System 2009 is recognized, a request for developing a new system is forwarded for approval. If approved, a study is conducted to ensure that the proposed System is feasible. If feasible, the System Requirements are specified followed by phases of System design, System implementation, Testing, Conversion and Evaluation. A recycling of development activities may occur following System evaluation if System still requires modification or redevelopment. The term “Development Cycle” is used to acknowledge the importance of recycling in meeting information needs. 
 
SDLC Models: 
 
Following are the most important and popular SDLC models followed in the software industry : 
	Waterfall Model 
	Prototyping Model 
	Incremental Model
	Evolutionary Model 
	Spiral Model
	V-Model
	Agile Development Model
	Rapid Application Development 
	Iterative Model

Iterative Waterfall Model: 
We have used Iterative Waterfall Model for our project. 
In a practical software development project, the classical waterfall model is hard to use. So, Iterative Waterfall Model can be thought of as incorporating the necessary changes to the classical waterfall model to make it usable in practical software development projects. It is almost same as the classical waterfall model except some changes are made to increase the efficiency of the software development. 
The iterative waterfall model provides feedback paths from every phase to its preceding phases, which is the main difference from the classical waterfall model. 
Feedback paths introduced by the iterative waterfall model are shown in the figure below. 
The various phases of Iterative model are as follows: 
1. Requirement Analysis and Specification: In this phase, requirements are gathered from customers and check by an analyst whether requirements will fulfill or not. Analyst checks that need will achieve within budget or not. After all of this, the software team skips to the next phase. 
2. Design: In the design phase, team design the software by the different diagrams like Data Flow diagram, activity diagram, class diagram, state transition diagram, etc. 
3. Implementation: In the implementation, requirements are written in the coding language and transformed into computer programs which are called Software. 
4. Unit Testing: After completing the coding phase, software testing starts using different test methods. There are many test methods, but the most common are white box, black box, and grey box test methods. 
6. Integration and System testing: In this phase, after the product deployment, review phase is performed to check the behavior and validity of the developed product. And if there is any error found then the process starts again from the requirement gathering.
7. Maintenance: In the maintenance phase, after deployment of the software in the working environment there may be some bugs, some errors or new updates are required. Maintenance involves debugging and new addition options. 
For example, if during a testing a design error is identified, then the feedback path allows the design to be reworked and the changes to be reflected in the design documents. However, observe that there is no feedback path to the feasibility stage. This means that the feasibility study errors cannot be corrected. 
The iterative waterfall model is the most widely used software development model evolved so far.
Diagrammatic Representation of Iterative Waterfall Model: 
  
 

Application of Iterative Waterfall Model: 
	Major requirements are defined but the minor details might involve as time goes. 
	New technologies are being used and there is a learning curve for the programmers to learn. 
	Resources are limited to do a huge project as if a small project automates are in contact rather than permanent. 
	There is a very high risk as a goal of the project might change from time to time. 
Advantages of using Iterative Waterfall Model: 
	This model allows the mechanism of error connection because there is a feedback path from one phase to its preceding phase. 
	This model is simple to understand and use. It is the most widely used software development model evolved so far. 
	Parallel development can be done. 
Disadvantages of using Iterative Waterfall Model: 
	Sometimes customer requirement changes after development phase starts, and it is difficult to incorporate the requests made for change. 
	Project is prone to many types of risks but there is no risk handling mechanism. 
	This model is not suitable for a small project. 
 
Development Schedule:
 
Development schedule is one of the important parts of the planning, there are different ways of making development here we used Gantt chart for development schedule. The development schedule must be independent as possible. Ideally the components should be stand-alone so that it does not need any other component to operate. This is only possible for every simple component and more complex component is inevitably having some dependencies on other component. The schedule gives the time estimation of the project. In the project or development of software there are different phases like study, design, implementation and test. Our project also has different phases and each phase takes different time for development. 
Our project starts on 5th May 2021 and ends on 25th July 2021. The total time taken by our project is 82 days. The project consists of different phases like analysis, design, implementation and testing. 
 
 
 				Fig: Gantt chart 
 
 

Total Project time:  
 
Analysis – 
Design – 
Implementation – 
Testing – 
Deployment – 



System Design:
The most challenging phase of the system life cycle is system design. The term design describes a final system and the process by which it is developed. It refers to the technical specifications that will be applied in implementing the candidate system. It also includes the construction of programs and program testing. System design is a solution, a “how to” approach the creation of a new system. This important phase is composed of several steps. It provides understanding and procedural details necessary for implementing the system recommended in the feasibility study. Emphasis is on translating the performance requirements into design specifications. The first step is to determine how the output is to be produced and int what format. Samples of the output and input are also presented. Second, input data and master files (database) have to be designed to meet the requirements of the proposed output. The operational (processing) phases are handled through program construction and testing, including a list of programs needed to meet the systems objectives and to complete documentation. Finally, details related to justification of the system and an estimate of the impact of the candidate system on the user and the organization are documented and evaluated by management as a step toward implementation. The basic steps in designing are:
 ▪ Output Design 	  ▪ Input Design	▪ Process Design   ▪ Data Design
	Output Design:
Computer output is the most important and direct source of information to the user. Efficient, intelligible output design should improve the system’s relationships with the user and help in decision making. A major form of output is hard copy from the printer. Output from computer system is required to communicate the result of processing to users. Designing computer output should process in an organized, well thought out manner. The right output must be developed while ensuring that each output element is designed sothat the user will find the system easy to use effectively. The term ‘output’ applies to any information by an information system, whether printed or displayed. While designing computer outputs, the following steps have to be followed. 
In addition to deciding on the output device, the systems analyst must consider the print format and the editing for the final printout. The task of output preparation is critical, requiring skill and ability to align user requirements with the capabilities of the system in operation. The design considerations we have followed while designing output are: 
▪ Name or title. ▪ Space and arrangement ▪ Headers and footers. 
In online applications, the layout sheet for displayed output is similar to the layout chart used for designing input. In these cases, the output forms are similar to the input forms. Other type of applications output forms like reports used to make decisions must be designed carefully. The following layout describes our report designing.
	Input Design:
Inaccurate input data are the most common cause of errors in data processing. Errors entered by data entry operators can be controlled by input design. Input design is the process of converting user-originated inputs to a computer-based format. In the system design phase, the expanded data flow diagram identifies logical data flows, data stores, sources and destinations. A system flowchart specifies master files (database), transaction files and computer programs.
	Input Media:
In this project, earlier stages identified the data that is input to the transactions. The next step is what media should be used for the input. Since this is an online data entry project, we need computer based 
online forms as the media for input entry. There are three approaches for data entry with forms: menu based formatted forms, and prompts. We adopted the formatted form approach for entering data. A formatted form is a pre-printed form or a template that requests the user to enter data in appropriate locations. It is a fill-in-blank type. The form is flashed on the screen as a unit. The cursor is usually positioned at the first blank. After the user responds by filling in the appropriate information, the cursor automatically moves to the next line, and so on until the form is completed.
	Form Types:
There are three types of forms classified by what it does in the system. They are: action forms – to perform some action such as storing, modifying, and deleting data, memory forms – to perform extraction and display operations on existing historical data, and report forms – to generate decision support data from existing records. We used reports as output forms. As an input media we used both action and memory forms in combination.
	Form Layout:
When form is designed, a list is prepared of all the items to be included on the form and the maximum space to be reserved. The form user has to make sure that it has the required details which should check the list. 
▪ Title 		▪ Data Zoning 		▪ Rules and Captions
	Design Considerations:
In designing these forms, we have taken care several attributes that are mentioned below:  
•	Identification and wording - Form titles and labels  
•	Maximum readability and use - Legible, intelligible, uncomplicated, and space  
•	Physical factors - Composition, colour, layout  
•	Order of data items - Logical sequence, data relation 
•	Ease of data entry - Field positions  
•	Size and arrangement - Size, storing, filing, and space for signs  
•	Use of instructions - Online help for data entry, status info

Functional Flowchart:

A System consists of many different activities or processes. We know the relation between the processes that one process will contain several individual processes. We often show these relations in terms of process charts.

Benefits of the Functional Flow Diagram:-

•	These diagrams are a great way to give others a quick overview of a scenario.

•	They are useful in training in new staff or indeed, during audits or visits by customers,

•	By having this overview, you are more likely to get consensus in teams as each will have the common understanding of what is being spoken about.

•	By using the Functional Flow Diagram you are increasing your chances of finding opportunities to improve.

•	It is a quick and easy method to learn and one that will bring a lot to the job you want to do.

Functional Flowchart for our System:


Data Base Design:
Database Design is a collection of processes that facilitate the designing, development, implementation and maintenance of enterprise data management systems. Properly designed database is easy to maintain, improves data consistency and are cost effective in terms of disk storage space. The database designer decides how the data elements correlate and what data must be stored. 
The main objectives of database design in DBMS are to produce logical and physical designs models of the proposed database system. 
The logical model concentrates on the data requirements and the data to be stored independent of physical considerations. It does not concern itself with how the data will be stored or where it will be stored physically. 
The physical data design model involves translating the logical DB design of the database onto physical media using hardware resources and software systems such as database management systems (DBMS).
	Importance of Database Design:
It helps produce database systems 
01. That meet the requirements of the users. 
02. Have high performance. 
Database design process in DBMS is crucial for high performance database system. 
Database design defines the database structure used for planning, storing, and managing information. Accuracy in data can only be accomplished if a database is designed to store only valuable and necessary information. 
A well-designed database is imperative in guaranteeing information consistency, eliminating redundant data, efficiently executing queries, and improving the performance of the database. Meticulously designing a database saves you from wasting time and getting frustrated during the database development phase. A good database design also allows you to easily access and retrieve data whenever needed. 
The reliability of data depends on the table structure; whereas creating primary and unique keys guarantees uniformity in the stored information. 
Data replication can be avoided by forming a table of probable values and using a key to denote the value. So, whenever the value changes, the alteration happens only once in the main table. 
As the general performance of a database depends on its design, a good database design uses simple queries and faster implementation. It is easy to maintain and update; whereas fixing trivial interruptions in a poor database design may harm stored events, views, and utilities.
Entity: 
An entity can be a real-world object, either animate or inanimate, that can be easily identifiable. For example, in a school database, students, teachers, classes, and courses offered can be considered as entities. All these entities have some attributes or properties that give them their identity.  
An entity set is a collection of similar types of entities. An entity set may contain entities with attribute sharing similar values. For example, a Students set may contain all the students of a school likewise a Teachers set may contain all the teachers of a school from all faculties. Entity sets need not be disjoint.  
Entities are represented by means of rectangles. Rectangles are named with the entity set they represent. 
ADMIN 		EMPLOYEE		USERS
 
Types of entity: 

	Strong Entity: 
A strong entity is not dependent of any other entity in the schema. A strong entity will always have a primary key. Strong entities are represented by a single rectangle. The relationship of two strong entities is represented by a single diamond. 
Various strong entities, when combined together, create a strong entity set.  
 




	Weak Entity: 
A weak entity is dependent on a strong entity to ensure the its existence. Unlike a strong entity, a weak entity does not have any primary key. It instead has a partial discriminator key. A weak entity is represented by a double rectangle. 
The relation between one strong and one weak entity is represented by a double diamond. 
  
 
Attributes:
Entities are represented by means of their properties, called attributes. All attributes have values. For example, a student entity may have name, class, and age as attributes.  
There exists a domain or range of values that can be assigned to attributes. For example, a student's name cannot be a numeric value. It has to be alphabetic. A student's age cannot be negative, etc. Attributes are represented by means of ellipses. Every ellipse represents one attribute and is directly connected to its entity (rectangle). 
 

 
 
Types of Attributes:
	Simple Attribute:  
Simple attributes are atomic values, which cannot be divided further. 
For example, a student's phone number is an atomic value of 10 digits. 


  
	Composite Attribute: 
Composite attributes are made of more than one simple attribute. For example, a student's complete name may have first name, middle name and last name.  
 
 

	Derived Attribute: 
Derived attributes are the attributes that do not exist in the physical database, but their values are derived from other attributes present in the database. 
For example, average salary in a department should not be saved directly in the database, instead it can be derived. 
For another example, age can be derived from date_of_birth. 
 
 
 
	Single Value Attribute: 
Single valued attributes are those attributes which can take only one value for a given entity from an entity set. 
 
 
 
	Multi-value attribute: 
Multi-value attributes may contain more than one values. 
For example, a person can have more than one phone number, email address, etc. 
 	 	 	 
 
 
 
 
These attribute types can come together in a way like: 
	simple single-valued attributes. 
	simple multi-valued attributes. 
	composite single-valued attributes. 
	composite multi-valued attributes.  
 
Keys:
In a database management system, a key is a set of one or more attributes that uniquely identifies a row or record in a table or a relation. Keys are important for maintaining data integrity and for establishing relationships between tables. There are several types of keys in a database management system, including:

	Primary Key: A primary key is a unique key that is used to identify each row or record in a table. It cannot have null values and must have a unique value for each row. A table can have only one primary key.

	Foreign Key: A foreign key is a key that is used to establish a relationship between two tables. It is a reference to a primary key attribute in another table. The foreign key attribute in one table must have the same data type and values as the primary key attribute in the other table.

	Candidate Key: A candidate key is a key that could potentially be used as a primary key. It must be unique, but it is not currently being used as the primary key.

	Unique Key: A unique key is a key that enforces the uniqueness of a column or set of columns in a table. It can have null values, but it must have a unique value for each row.

	Composite Key: A composite key is a key that is made up of two or more attributes. It is used when a single attribute cannot uniquely identify a row or record in a table.

	Alternate Key: An alternate key is a key that is not the primary key, but can be used to identify a row or record in a table. It must be unique, but it is not currently being used as the primary key.

	Super Key: A super key is a set of one or more attributes that uniquely identifies a row or record in a table. It may contain more attributes than the minimum necessary to uniquely identify a row, and it may include attributes that are not strictly necessary for identification purposes.

Relationship:
The association among entities is called a relationship. For example, an employee Works at a department, a student enrols in a course. Here, “manages” and “writes” are called relationships.  
 	 



Relationship Set:
A set of relationships of similar type is called a relationship set. Like entities, a relationship too can have attributes. These attributes are called descriptive attributes.  
Degree of Relationship:
The number of participating entities in a relationship defines the degree of the relationship. 
	Binary = degree 2. 
	Ternary = degree 3.
	n-ary = degree n. 
Mapping Cardinalities:
Cardinality defines the number of entities in one entity set, which can be associated with the number of entities of other set via relationship set.  
	One-to-One: One entity from entity set A can be associated with at most one entity of entity set B and vice versa.  
 

 
	One-to-Many: One entity from entity set A can be associated with more than one entity of entity set B however an entity from entity set B, can be associated with at most one entity.  
 

 
	Many-to-One: More than one entity from entity set A can be associated with at most one entity of entity set B, however an entity from entity set B can be associated with more than one entity from entity set A.  
 

 
	Many-to-Many: One entity from A can be associated with more than one entity from B and vice versa.  




Normalization:
Normalization is the process of refining the data model built by the ER diagram. The normalization technique, logically groups the data over the number of tables, with minimum redundancy of data. The entities or tables resulting from normalization contain data items, with relationships being represented by replication of key data items.  
The goal of relational database design is to generate a set of relation schemes that allow us to store information with minimum redundancy of data and allow us to retrieve information easily and efficiently.  The approach followed is to design schemas that are in an appropriate form one of the socalled normal form.  
The first step towards normalization is to convert the ER model into tables or relations. The next step is to examine the database for redundancy and if necessary, change them to non-redundant forms.  This non-redundant model is then converted into a database definition, which achieves the objective of the database design phase. We defined database from the above ER model by normalizing it to 3rd normal form. We will show the definitions of those database tables later at the time of physical database design phase.  

Entities:
	users
	posts
	categories
	comment
	support
Attributes:
Table	Attributes
users	user_id, fname, lname, username, email, password, profile_picture, is_moderator
posts	posts_id, title, body, thumbnail, date_time, category_id, author_id, is_featured
categories	categories_id, title, description
comment	comment_id, timestamp, content, blog_id, user_id
support	support_id, name, email, subject, message, user_id


ER-Diagram:
An Entity–relationship model (ER model) describes the structure of a database with the help of a diagram, which is known as Entity Relationship Diagram (ER Diagram). 
An ER model is a design or blueprint of a database that can later be implemented as a database. The main components of E-R model are: entity set and relationship set.  
An ER diagram shows the relationship among entity sets. An entity set is a group of similar entities and these entities can have attributes. In terms of DBMS, an entity is a table or attribute of a table in database, so by showing relationship among tables and their attributes, ER diagram shows the complete logical structure of a database. 
Data Dictionary :
A data dictionary contains metadata i.e., data about the database. The data dictionary is very important as it contains information such as what is in the database, who is allowed to access it, where is the database physically stored etc. The users of the database normally don't interact with the data dictionary, it is only handled by the database administrators. 
These are some of the most common elements used in a data    dictionary, though there’s variation:
	Attribute name. 
	Attribute type. 
	Entity-relationship. 
	Reference data. 
	Rules for validation, schema, or data quality. 
	Detailed properties of data elements. 
	Physical information about where data is stored. 
In a data dictionary we will find a list of all the elements composing the data flow through a system. 

Table Name: users

Name	Type	Null	Key
user_id	int(11)	Not Null	Primary Key
fname	char(20)		
lname	char(20)		
username	varchar(30)		
email	varchar(50)		
password	varchar(255)		
profile_picture	varchar(255)		
is_moderator	int(1)		



Table Name: posts

Name	Type	Null	Key
posts_id	int(11)	Not Null	Primary Key
title	varchar(255)		
body	text		
thumbnail	varchar(255)		
date_time	timestamp		
category_id	int(11)		Foreign Key
author_id	int(11)		Foreign Key
is_featured	int(1)		



Table Name:  categories

Name	Type	Null	Key
categories_id	int(11)	Not Null	Primary Key
title	varchar(50)		
description	text		



Table Name: comment

Name	Type	Null	Key
comment_id	int(11)	Not Null	Primary Key
timestamp	timestamp		
content	varchar(255)		
blog_id	int(11)		Foreign Key
user_id	int(11)		Foreign Key
Table Name: support

Name	Type	Null	Key
support_id	int(11)	Not Null	Primary Key
name	char(20)		
email	varchar(50)		
subject	varchar(50)		
message	varchar(100)		
user_id	int(11)		Foreign Key

Process Design:
Structured design is a data flow-based methodology. The approach begins with a system specification that identifies inputs and outputs and describes the functional aspects of the system. The next step is the definition of the modules and their relationships to one another in a form called a structure chart, using a data dictionary, DFD, and other structured tools. Structured design partitions a program into small, independent modules.

Data Flow Diagram:
A Data Flow Diagram (DFD) is a traditional visual representation of the information flows within a system.  A neat and clear DFD can depict the right amount of the system requirement graphically. It can be manual, automated, or a combination of both. It shows how data enters and leaves the system, what changes the information, and where data is stored. 
The objective of a DFD is to show the scope and boundaries of a system as a whole. It may be used as a communication tool between a system analyst and any person who plays a part in the order that acts as a starting point for redesigning a system. The DFD is also called as a data flow graph or bubble chart.  
The DFD may be used to perform a system or software at any level of abstraction. In fact, DFDs may be partitioned into levels that represent increasing information flow and functional detail. Levels in DFD are numbered 0, 1, 2 or beyond. Here, we will see primarily three levels in the data flow diagram, which are: 0-level DFD, 1-level DFD, and 2-level DFD. 

Symbols used in a DFD:
 

1.	External Entity: An outside system that sends or receives data, communicating with the system being diagrammed. They are the sources and destinations of information entering or leaving the system. They might be an outside organization or person, a computer system or a business system. They are also known as terminators, sources and sinks or actors. They are typically drawn on the edges of the diagram.

2.	Process: Any process that changes the data, producing an output. It might perform computations, or sort data based on logic, or direct the data flow based on business rules. A short label is used to describe the process, such as “New Books”.

3.	Data Store: Files or repositories that hold information for later use, such as a database table or a membership form. Each data store receives a simple label, such as “Query”.
4.	Data Flow: The route that data takes between the external entities, processes and data stores. It portrays the interface between the other components and is shown with arrows, typically labelled with a short data name, like “Manage Data”.
DFD for our Software:
 





 


 

 

Use Case Diagram:

A use case diagram is a graphical depiction of a user's possible interactions with a system, showing various use cases and different types of users the system has. The use cases are represented by circles or ellipses.
The main purpose of a use case diagram is to portray the dynamic aspect of a system. It accumulates the system's requirement, which includes both internal as well as external influences. It invokes persons, use cases, and several things that invoke the actors and elements accountable for the implementation of use case diagrams. It represents how an entity from the external environment can interact with a part of the system.
Following are the purposes of a use case diagram given below:
1.	It gathers the system's needs.
2.	It depicts the external view of the system.
3.	It recognizes the internal as well as external factors that influence the system.
It represents the interaction between the actors.
 

 

Implementation:
Testing:
Software testing is the process of executing a program or system with the intent of finding errors. Or, it involves any activity aimed at evaluating an attribute or capability of a program or system and determining that it meets its required results. Software is not unlike other physical processes where inputs are received and outputs are produced. Where software differs is in the manner in which it fails. Most physical systems fail in a fixed (and reasonably small) set of ways. By contrast, software can fail in many bizarre ways. Detecting all of the different failure modes for software is generally infeasible unlike most physical systems; most of the defects in software are design errors, not manufacturing defects. Software does not suffer from corrosion, wear-and-tear – generally it will not change until upgrades, or until obsolescence. So once the software is Shipped, the design defects -- or bugs -- will be buried in and remain latent until activation. Software bugs will almost always exist in any software module with moderate size: not because programmers are careless or irresponsible, but because the complexity of software is generally intractable – and humans have only limited ability to manage complexity.  
It is also true that for any complex systems, design defects can never be completely ruled out. Discovering the design defects in software is equally difficult, for the same reason of complexity. Because software and any digital systems are not continuous, testing boundary values are not sufficient to guarantee correctness. All the possible values need to be tested and verified, but complete testing is infeasible. Exhaustively testing a simple program to add only two integer inputs of 32-bits (yielding 2^64 distinct test cases) would take hundreds of years, even if tests were performed at a rate of thousands per second. Obviously, for a realistic software module, the complexity can be far beyond the example mentioned here. If inputs from the real world are involved, the problem will get worse, because timing and unpredictable environmental effects and human interactions are all possible input parameters under consideration.  
The testing activities are done in all phases of the lifecycle in an iterative software development approach. However, the emphasis on testing activities varies in different phases. This procedure explains the focus of testing in inception, elaboration, construction and transition phases. In the inception phase most of requirements capturing is done and the test plan is developed. In elaboration phase most of design is developed, and test cases are developed. Construction phase mainly focuses on development of components and units, and unit testing is the focus in this phase. Transition phase is about 
 
Deploying software in the user community and most of the system testing and acceptance testing is done in this phase. 
	The main purposes of this procedure are:  
•To carry out comprehensive testing of the system/product and its individual components in order to ensure that the developed system/product conforms to the user requirements/design.  
•To verify the proper integration of all components of the software.  
•To verify that all requirements have been correctly implemented.  
•To identify and ensure defects are addressed prior to the deployment of the software.  
 
 
	Test Planning:  
Initial test plan addresses system test planning, and over the elaboration, construction and transition phases this plan is updated to cater other testing requirements of these phases, like, unit & integration testing.  
Test Plan must contain the following:  
•	Scope of testing  
•	Methodology to be used for testing  
•	Types of tests to be carried out  
•	Resource & system requirements  
•	A tentative Test Schedule  
•	Identification of various forms to be used to record test cases and test results  
 
Testing is usually performed for the following purposes:  
•	To improve quality: Quality means the conformance to the specified design requirement. Being correct, the minimum requirement of quality, means performing as required under specified circumstances. Debugging, a narrow view of software testing, is performed heavily to find out design defects by the programmer. The imperfection of human nature makes it almost impossible to make a moderately complex program correct the first time. Finding the problems and getting them fixed, is the purpose of debugging in programming phase.  
 
•	For Verification and Validation (V&V): Another important purpose of testing is verification and validation (V&V). Testing can serve as metrics. It is heavily used as a tool in the V&V process. Testers can make claims based on interpretations of the testing results, which either the product works under certain situations or it does not work. We can also compare the quality among different products under the same specification, based on results from the same test.  
 
	Testing Methods Used for Project: 
There is a plethora of testing methods and testing techniques, serving multiple purposes in different life cycle phases. Classified by purpose, software testing can be divided into: Correctness testing, performance tests, reliability testing and security testing. Classified by life-cycle phase, software testing can be classified into the following categories: requirements phase testing, design phase testing, program phase testing, evaluating test results, installation phase testing, acceptance testing and maintenance testing. By scope, software testing can be categorized as follows: unit testing, component testing, integration testing, and system are testing.  
	Correctness testing: 
Correctness testing is a type of testing that focuses on verifying whether the software or system under test meets its functional requirements and specifications. The purpose of this testing is to identify defects or errors in the system that could cause it to behave unexpectedly or produce incorrect results. 
 
Correctness testing is typically performed during the later stages of the software development life cycle, after unit testing and integration testing have been completed. It may involve both manual and automated testing techniques, and it can be conducted using various testing methodologies such as black-box testing, white-box testing, or gray-box testing. 
 
Some common techniques used in correctness testing include functional testing, acceptance testing, regression testing, and boundary value analysis. The goal of these techniques is to validate that the system is working as expected and that it is meeting the requirements and specifications that have been set for it. 
 
In summary, correctness testing is an essential part of software testing that helps to ensure the quality and reliability of software products. It is a crucial step in the development process that helps to detect and correct defects before the software is released to end-users. 
	Black-box testing: 
Black Box Testing is a software testing technique that focuses on testing the functionality of a software application without examining its internal code or structure. In this type of testing, testers have no knowledge of the internal workings of the software and are only concerned with the inputs and outputs of the system. 
The main objective of Black Box Testing is to ensure that the software meets the specified requirements and performs as expected. Testers create test cases based on functional specifications, use cases, and requirements documentation. They execute the tests using different data inputs and observe the output results to validate that the software behaves as expected. 
Black Box Testing is often used at different levels of the software development lifecycle, including unit, integration, system, and acceptance testing. It can be performed manually or through automated testing tools. 
 
Some of the advantages of Black Box Testing include: 
 
-	It focuses on user requirements and expected behaviors, making it easier to detect user-related issues. 
-	It does not require knowledge of the internal workings of the software, making it easier for non-technical testers to perform the testing. 
-	It helps to uncover defects that may not have been detected through other testing techniques. 
 
However, there are some limitations to Black Box Testing: 
 
-	The tester's ability to create comprehensive test cases can be limited by incomplete or unclear requirements documentation. 
-	Test cases may not cover all possible scenarios, leading to the possibility of undetected defects. 
-	The tester's knowledge of the application's internal workings may be limited, making it more difficult to pinpoint the cause of defects. 
 
In summary, Black Box Testing is a valuable testing technique that focuses on testing the external behavior of the software. It helps to ensure that the software meets the specified requirements and performs as expected, but it does have limitations that must be considered when choosing a testing approach. 
	White-box testing:  
White Box Testing is a software testing technique that focuses on testing the internal code and structure of a software application. It is also known as Clear Box Testing or Structural Testing. In this type of testing, testers have access to the source code and are concerned with testing the logic, flow, and structure of the software. 
The main objective of White Box Testing is to ensure that the code meets quality standards and is free of errors, vulnerabilities, and bugs. Testers create test cases based on the internal structure and logic of the code. They use different techniques such as code reviews, code coverage analysis, and debugging to identify and fix issues. 
 
White Box Testing is often used at different levels of the software development lifecycle, including unit, integration, and system testing. It can be performed manually or through automated testing tools.  
Some of the advantages of White Box Testing include: 
-	It helps to ensure that the code meets quality standards and is free of errors, vulnerabilities, and bugs. 
-	It allows testers to identify and fix issues early in the development process, reducing the cost and effort required for later testing phases. 
-	It helps to improve the overall performance and efficiency of the software. 
However, there are some limitations to White Box Testing: 
-	It requires knowledge of programming languages and software architecture, making it more difficult for non-technical testers to perform the testing. - It may not cover all possible scenarios, leading to the possibility of undetected defects. 
-	It may lead to over-testing or under-testing, depending on the quality and completeness of the test cases. 
In summary, White Box Testing is a valuable testing technique that focuses on testing the internal code and structure of the software. It helps to ensure that the code meets quality standards and is free of errors, vulnerabilities, and bugs, but it does have limitations that must be considered when choosing a testing approach. 
	Performance testing:  
Perform testing, also known as performance testing, is a type of software testing that focuses on evaluating the performance of a software application under a specific workload. The goal of perform testing is to identify and measure the system's response time, throughput, and scalability when subjected to different types of load. 
 
Perform testing involves simulating various user scenarios and load conditions to determine how the system will perform in real-world situations. The testing can be conducted manually or using automated tools. There are different types of perform testing, including load testing, stress testing, endurance testing, and spike testing. 
Perform testing is essential for ensuring the quality and reliability of software applications. It helps to identify performance bottlenecks, scalability issues, and other problems that could affect the user experience. By conducting perform testing, software developers can optimize the system's performance and ensure that it can handle the expected workload. 
	Reliability testing: 
Reliability testing is a type of software testing that focuses on evaluating the stability, robustness, and availability of a software application under various conditions. The purpose of reliability testing is to determine the system's ability to perform consistently over time, even when subjected to adverse conditions such as high user traffic, heavy load, and software or hardware failures. 
 
Reliability testing involves testing the software application in different scenarios and environments to determine its ability to function correctly and recover from failures and errors. It can be conducted manually or using automated tools, and it typically involves testing the application's error handling, fault tolerance, and recovery mechanisms. 
 
There are different types of reliability testing, including endurance testing, recovery testing, and availability testing. Endurance testing involves running the application under a specific workload for an extended period to determine its stability over time. Recovery testing involves intentionally causing failures and errors in the system to determine how well it can recover from these issues. Availability testing involves testing the system's ability to be available to users when they need it. 
 
Reliability testing is an essential part of software testing because it helps to ensure that the software application is stable, reliable, and can perform consistently over time. It helps to identify potential problems that could affect the user experience and helps software developers optimize the system's reliability and availability.  
	Security testing: 
Software quality, reliability and security are tightly coupled. Intruders to open security holes can exploit flaws in software. With the development of the Internet, software security problems are becoming even more severe. Many critical software applications and services have integrated security measures against malicious attacks. 
Maintenance:
Maintenance is a very important task & is poorly managed. Times spent and effort required in maintaining software and keeping it operational takes about 40% to 70% of the total cost of the life cycle. “Software maintenance is the activity that includes error corrections, enhancements of capabilities, deletion of obsolete capabilities and optimization.” Basically, any work done to change the software after it is in operation is considered to be maintenance. Its purpose is to preserve the value of the software.
 Corrective Maintenance: 
It means modifications made to the software to correct the defects. Defects can result from design errors, logic errors, coding errors, data processing errors and system performance errors. 
Adaptive Maintenance: 
It includes modifying the software to match changes in the ever-changing environment. Environment refers to the totality of all conditions and influences which act from outside upon the software. E.g. business rules, government policies, work patterns and software/hardware operating platforms. 
Perfective Maintenance:
It means improving processing efficiency or performances, or restructuring the Software to improve changeability.

Future Scope:
Monetization Options:
Exploring monetization strategies such as premium subscriptions, sponsored content, or affiliate partnerships to support the growth and sustainability of the platform.
Mobile Application: 
Developing a companion mobile application for the website to enhance accessibility and user engagement on-the-go.
Hiring Employee:
As we are a new startup we lack the man power and the sufficient financial backup to employ moderators/other employees who will be monitoring the day to day activities of the website and manage necessary tasks like managing posts, managing users, provide support etc. So for now, we core members of Archivus will be handling the necessary tasks of maintaining the system.

Conclusion

This project has been implemented to do some basic concepts. We have a few plans for this project which is mentioned in the future scope portion. The frontend of this project has been developed using HTML, JavaScript, CSS and Bootstrap. The backend of this project has been developed by PHP and MySQL. The system maintains data consistency by avoiding manual error and documents are maintained accurately which reduces the losses that can be made due to various environment features. All the requirement regarding to this problem are solved and the needs, specified in the problem definition are fulfilled. This project will help all end users as a user-friendly system











Bibliography
Websites:
1. www.google.com
2. www.w3schools.com
3. www.youtube.com
4. www.stackoverflow.com
5. www.bootstrap.com
6. www.wikipedia.com

Books:
1.	Clean Code: A Handbook of Agile Software Craftsmanship by Robert. C. Martin.

2.	Fundamentals of Software Engineering Book by Rajib Mall.

3.	Clean Architecture: A Craftsman’s Guide to Software Structure and Design by Robert C. Martin.









