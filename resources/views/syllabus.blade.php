@extends('layouts.app')

@push('head')
    <style>
    table.point-break-down {
        table-layout: fixed;
        border-collapse: collapse;
        border: 1px solid black;
        width: 100%;
    }
    table.point-break-down th,
    table.point-break-down td  {
        padding: 0.25em 0.25em;
    }
    table.point-break-down>thead>tr,
    table.point-break-down>tfoot>tr {
        background-color:gray;
        color:white;
    }
    table.point-break-down>tbody>tr>td  {
        font-size: medium;
        width: 14%;
        height: 80px;
        text-align: left;
        vertical-align: top;
        border: 1px solid black;
    }
    #contact-info td {
        padding: 5px;
    }
    </style>
@endpush

@section('content')

<h1>Syllabus</h1>

<div class="well">
    <table id="contact-info">
        <tbody>
            <tr><td>Instructor:</td><td>Jeff Puckett</td></tr>
            <tr><td>Office Hours:</td><td>@include('partials.personal-availability')</td></tr>
            <tr><td>Email:</td><td><a href="mailto:jpucket@uark.edu">jpucket@uark.edu</a></td></tr>
        </tbody>
    </table>
</div>

<p class="lead">
    Welcome to Business Database Systems, also known as “Database.” Understanding databases is a fundamental
    skill that can be applied in a variety of professional environments. I expect you to put effort into this
    class, and I hope you have fun learning various aspects of database design, development, and management.
</p>

<h2>Course Description</h2>
<p>
    The focus of this class is to introduce you to centralized information system design and implementation
    for business applications. This will include an in-depth study of data modeling, logical systems modeling,
    physical design, and software requirements as they relate to database management. Students will utilize
    CASE tools, Structured Query Language (SQL), Visual Basic, and various DBMS platforms to apply
    database concepts.
</p>

<h2>Value of the Course</h2>
<p>
    As an Information Systems major, an understanding of the role of database systems within the business
    environment is crucial to your success. Database systems provide the foundation for management
    information systems. Nearly all business applications utilize databases to some degree, and most utilize
    databases heavily. To make appropriate decisions, managers need to understand and effectively utilize
    database management systems.
</p>

<h2>Student Learning Outcomes</h2>
<p>
    Upon completion of this course, students should be able to:
    <ul>
        <li>Demonstrate stronger critical thinking and logical reasoning skills.</li>
        <li>Explain the importance of databases in information systems.</li>
        <li>Describe the roles of various information systems professionals who work with databases.</li>
        <li>Demonstrate functional knowledge of the fundamentals of database design, implementation, and utilization.</li>
        <li>Demonstrate database skills through both individual and team projects.</li>
    </ul>
</p>

<h2>Required Textbook</h2>
<p>
    Hoffer, J.A., Ramesh, V. and Topi, H. Modern Database
    Management, 12<sup>th</sup> edition. (Prentice Hall, 2016). ISBN: 9780133544619
</p>

<img src="/images/book.jpg" class="center-block img img-responsive"></img>

<h2>Required Software</h2>
<p>
    All course-specific tools will be available through VMWare and in the campus labs (WCOB 112, WCOB 250, JBHT
    220, and JBHT 222). WCOB 112 has 24 hour card access. Students can contact
    <a href="mailto:cardaccess@walton.uark.edu">cardaccess@walton.uark.edu</a>
    or stop by WCOB 246 for issues with door card reader. Collaboration room available in JBHT 256/JBHT 257/JBHT 258.
    Will currently need to provide your own laptop for computer access.
</p>

<h2>Assessment and Grades</h2>
<table class="point-break-down">
    <thead>
        <tr>
            <th>Category</th>
            <th>Points</th>
            <th>Percentage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Exams</td>
            <td>200</td>
            <td>40</td>
        </tr>
        <tr>
            <td>In-Class / Homework</td>
            <td>116</td>
            <td>23.2</td>
        </tr>
        <tr>
            <td>Project</td>
            <td>100</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Quizzes</td>
            <td>60</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Q &amp; A</td>
            <td>24</td>
            <td>4.8</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td><strong>Total</strong></td>
            <td><strong>500</strong></td>
            <td>&nbsp;</td>
        </tr>
    </tfoot>
</table>

<h3>Exams</h3>
<p>
    There are two exams in this course. The midterm will be administered in class.
    The final exam will be given during the scheduled Final Exam period.
    The format of each exam will be announced in class prior to the day of the exam.
    Dates of the exams will be posted on the class schedule.
    Absolutely no makeup exams will be given for uncoordinated/unexcused exam absences.
    Any uncoordinated, unexcused exam will result in a score of 0 for that exam,
    unless prior permission has been given.
    Permission to take a make-up exam will be given only for extreme circumstances.
</p>

<h3>Class Participation</h3>
<p>
    Class attendance is extremely important.
    There are participation points to be earned every week including many group activities.
    Additionally, every week you are required to
    submit questions and answers into the course database.
    These questions may be used on exams,
    so it's in your benefit to familiarize yourself with the content submitted by your peers.
</p>
<ul>
    <li>Question (1 point per week)</li>
    <li>Answer (1 point per week)</li>
</ul>
<p>
    Refer to the <a href="https://github.com/ISYS4283/questions-answers">project repository</a>
    for detailed requirements, which may change over time.
</p>

<h3>Homework</h3>
<p>
    The best way to become familiar with the concepts of database systems is by using them.
    To aid in your learning there will be a number of homework assignments in this class.
    Assignments will consist of exercises from the textbook as well as other material as appropriate.
    Some of these will be group activities while others will be individual assignments
    and should be completed in accordance with the academic integrity policy.
    Usually these will be submitted on blackboard.
</p>

<h3><a href="{{ route('project') }}">Project</a></h3>
<p>
    The class project is team-based and will be turned in and presented near the end of the semester.
    We will form teams with two to four members per team.
    I reserve the right to arrange/rearrange team assignments.
    Teams will be selected and the project assignment will be distributed during the first few weeks of the class.
    Many deliverables are required for the project,
    and a working application of professional quality is expected from each team.
    Group members will critique other group members' contribution,
    and these critiques will have a direct bearing on the points allocated to individuals on each team.
    Your project will require you to create a working software application
    (e.g. Visual Basic, C#, COBOL, Java, PHP, Python, etc...)
    that accesses a professional database management system
    (MS SQL Server, Teradata, Postgres, Oracle, MySQL, etc...
    [Microsoft Access will not be accepted for this course]).
    A wide range of skills are required to successfully complete the project,
    and this must be kept in mind when assembling project teams.
</p>

<h3>Quizzes</h3>
<p>
    Several quizzes will be given throughout the semester on blackboard.
    You are expected to have read the week's chapter <strong>before</strong> class,
    and the quizzes will be due prior to lectures as preliminary concept checks.
    If you are prepared for class, the quizzes should be easy five-minute exercises.
</p>

@endsection
