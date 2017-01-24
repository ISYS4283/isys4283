@extends('layouts.app')

@section('content')

<style>
#contact-info td {
    padding: 5px;
}
</style>

<h1>Syllabus</h1>

<div class="well">
    <table id="contact-info">
        <tbody>
            <tr><td>Instructor:</td><td>Jeff Puckett</td></tr>
            <tr><td>Office Hours:</td><td>By Appointment</td></tr>
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

<h3>Class Participation</h3>
<p>
    There are 10 participation points to be earned every week.
</p>
<ul>
    <li>Blog Writing (5 Points): Write a blog article summarizing the content from the chapter and lecture.</li>
    <li>Blog Review (3 Points): Review 3 of your peers' blog articles on a scale from 0-100.
    Reviews will be randomly assigned.
    You are only eligible to review blogs if you also authored a blog that week.
    The score you provide is entirely subjective and unto your discretion.
    Your review will not impact the author's participation points.
    Your review is used only for a leaderboard and bonus points.
    Reviews are kept strictly confidential, but if you choose to share, then that is your prerogative.</li>
    <li>Question (1 Point): Post at least one question on-topic for the week's content.</li>
    <li>Answer (1 Point): Post at least one answer to that week's question pool.</li>
</ul>

<h3>Homework</h3>
<p>
    The best way to become familiar with the concepts of database systems is by using them. To aid in your
    learning there will be a number of individual homework assignments in this class. Assignments will
    consist of exercises from the textbook as well as other material as appropriate. Assignments are due on
    the specified date & time in the class schedule and should be completed in accordance with the academic
    integrity policy.
</p>

<h3>Quizzes</h3>
<p>
    Several quizzes will be given throughout the semester. The quizzes are listed in your class schedule.
    There will be approximately 7 quizzes over the semester worth 10 points each. Any missed quiz will
    result in a score of 0 for that quiz. If you are prepared for class, the quizzes should be easy five-minute
    exercises.
</p>

<h3>Exams</h3>
<p>
    There are two exams in this course. The second exam will be given during the scheduled Final Exam
    period. The format of each exam will be announced in class prior to the day of the exam. Dates of the
    exams will be posted on the class schedule. Absolutely no makeup exams will be given for
    uncoordinated/unexcused exam absences. Any uncoordinated, unexcused exam will result in a
    score of 0 for that exam, unless prior permission has been given. Permission to take a make-up exam
    will be given only for extreme circumstances.
</p>
<p>
    A grade of zero (0) will be assigned if any examination materials are removed, even briefly, from the
    examination administration or the graded examination review site before, during, after, or during graded
    review of an examination, NO EXCEPTIONS. When exams are returned to you in the classroom and/or
    office environment for viewing your score, make sure they are returned to your instructor or a grade of
    zero (0) will be assigned to you for that particular exam. If you are absent on the day exams are returned
    in the classroom, it will be your responsibility to contact your instructor and make an appointment to come
    by your instructor’s office and view your exam.
</p>

<h3>Project</h3>
<p>
    The class project is team-based and will be turned in and presented near the end of the semester. We
    will form teams with three or four members per team. I reserve the right to arrange/rearrange team
    assignments based upon skill mixture among the individual team members. Teams will be selected and
    the project assignment will be distributed during the first few weeks of the class. Three deliverables are
    included in the project, and a working application of professional quality is expected from each team.
    Group members will critique other group members' contribution and these critiques will have a direct
    bearing on the points allocated to individuals on each team. Your project will require you to create a
    working software application (e.g. Visual Basic (preferred), COBOL, Java, etc...) that accesses a
    database on SQL Server or Teradata (Microsoft Access will not be accepted for this course). A wide
    range of skills are required to successfully complete the project, and this must be kept in mind when
    assembling project teams. Further details on the project and presentation will be given later.
</p>

@endsection
