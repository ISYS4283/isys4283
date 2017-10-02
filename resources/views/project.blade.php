@extends('layouts.app')

@section('content')

<h1>Project</h1>

<p class="lead">
So far in the semester we’ve focused on rather abstract aspects of databases
such as data modeling, functional dependencies, and normalization.
This project allows us to shift gears and explore more managerial aspects of databases.
One of the best ways to learn something is to try to put this new knowledge into practice.
Building database tables, queries, forms, and reports is relatively easy.
However, developing and maintaining standards, ensuring that the database is
properly documented and keeping to a firm deadline is pretty difficult
(as you will discover).
</p>

<h2>Deliverables - 100 points</h2>
<ol>
    <li><a href="#teams">Team Memberships</a> - 2 points</li>
    <li><a href="{{ asset('downloads/TeamContract.docx') }}">Proposal</a> - 10 points</li>
    <li><a href="#conceptual">Conceptual Design</a> - 25 points</li>
    <li><a href="#physical">Physical Design</a> - 25 points</li>
    <li><a href="#application">Finished Application</a> - 25 points</li>
    <li><a href="#presentation">Presentation</a> - 10 points</li>
    <li><a href="#peer-evaluation">Peer Evaluation</a> - 3 points</li>
</ol>
<p>
Each team should submit one copy of each deliverable through the Assignment link
on Blackboard. Handwritten material will not be accepted.
Remember, professionalism and appearance rarely cover mistakes;
however, they do make mistakes seem more tolerable.
</p>

<h2>Guidelines</h2>
<p>
While it may be possible or even desirable in some cases to propose and design a
system with more limited database requirements, it is important in this case to
be sure that your proposed system effectively applies and hones the knowledge
you gain through your participation in this course.
Therefore, all projects should comply with the following guidelines.
Exceptions will be considered on a case-by-case basis, but any deviation from
the standard will require significant effort redirected and applied within the
project to another key learning objective of the course.
</p>
<ul>
    <li>
    The data model should contain at least 5 tables, and should be normalized to 3NF.
    Any deviation from 3NF must be justified to and approved by the instructor.
    </li>

    <li>
    Physical table definitions should include a range of data types, including
    but not limited to: integer, decimal, string (varchar), and date.
    </li>

    <li>
    Databases must be implemented for a modern centralized server RDBMS, such as
    MS SQL Server, Teradata, Oracle, MySQL, etc. MS Access and SQLite are unacceptable.
    </li>

    <li>
    The user interface should contain at least:
    <ul>
        <li>2-3 screens for “data management” (inserting/maintaining/reviewing records)</li>
        <li>2-3 screens for reports and decision support</li>
    </ul>
    </li>

    <li>
    Databases should be loaded with data (at least 300 records).
    </li>

    <li>
    Queries should include basic insert, update, select, and delete commands and
    at least 3 “complex” queries are required which access 2 or more tables.
    </li>
</ul>

<section class="panel panel-default">
<div class="panel-heading">
<h2 id="teams">Teams - 2 points</h2>
</div>
<div class="panel-body">

<p>
Teams must be between 2 - 4 people.
Submit your team memberships on blackboard.
If you fail to submit on time, then you will receive no points for this
deliverable and you will be assigned to a team.
I suggest that you divide the extensive work required equitably among the team
members while at the same time relying on the special strengths of each team
member to allow the project to be completed within the strict time limits.
Please note that this project requires extensive use of computers and that the
computer lab becomes increasingly crowded as the semester progresses.
</p>

@include('partials.teams')

</div>
</section>



<section class="panel panel-default">
<div class="panel-heading">
<h2 id="conceptual">Conceptual Design &amp; Non-Functional Prototype - 25 points</h2>
</div>
<div class="panel-body">

<p>
For this deliverable, you need to submit your analysis and the conceptual
design of your database. This roughly maps to the Planning and Analysis portions
of the SDLC that you experienced in ISYS 3293.
Your report should include the following sections:
</p>

<h3>Executive Summary</h3>
<p>
A short, written overview of the project proposed.
This is a managerial statement that should not be more than a half a page long
(12 pt font, doubled space).  The summary should address the business problem or
opportunity identified, an overview of the project, and how the project
addresses the problem or opportunity.
</p>

<h3>Project Schedule</h3>
<p>
Provide a GANTT chart which encompasses all of the activities/tasks of the project.
Identify which team member or the whole team performed the activities/tasks.
I realize that these tasks and resource assignments are subject to change but at
least you will start out with a plan.
The GANTT chart and work plan should be included in the Appendix.
Note: the dates should correspond to project milestone due dates.
</p>

<h3>Statement of Scope</h3>
<p>
Write a statement explaining the scope of the proposed project.
This statement should include:
</p>
<ul>
    <li>
    <a href="{{ asset('downloads/SystemsRequest.doc') }}">Systems Request Form</a>
    (complete the form provided)
    </li>

    <li>General project information: List the project name, sponsor, project team.</li>

    <li>Problem/opportunity statement: Identify and briefly explain potential problems/opportunities</li>

    <li>
    Project objectives: List the objectives the client hopes to achieve with this system
    (Remember objectives must be measurable)
    </li>

    <li>Project description: Write a brief description of the project; include the purpose of the project.</li>

    <li>Identification of users: Who is directly and indirectly affected by this project?</li>

    <li>Benefits: What are the tangible and intangible benefits?</li>

    <li>Constraints: What are possible constraints or limitations imposed on this project?</li>

    <li>Duration &amp; Estimates: How long will the project take? Spend a little bit of time, research a methodology for estimating the project effort, and provide a realistic estimate.</li>

    <li>Costs: How much will the project cost?  What are the tangible and intangible costs?</li>

    <li>Feasibility &amp; Risk Assessment: consider different aspects of the project – is the project feasible given the constraints, estimates, and costs provided above?</li>

    <li>Scope Proposal: based on the information collected and documented above, provide a managerial summary specifying what features are in scope, and what features are out of scope.</li>
</ul>

<h3>Requirements Specification</h3>
<h4>User Context</h4>
<p>
Your database will support one or more business processes.
Who are the users? What do they see (these end up being your attributes)?
What sort of stuff will your database be used to keep track of?
What do they do with what they see (these end up being your processes)?
</p>
<h4>Detailed Requirements</h4>
<p>
This represents the primary output of your requirements gathering activities.
A clearly specified set of requirements makes developing the database much easier.
For this project you will need to make inferences (assumptions) from the
information provided and document those inferences/assumptions clearly.
I suggest that you start working on this section right away!
</p>
<ul>
    <li>
    For your sources of facts, use (create):
        <ul>
            <li>existing paperwork, documents, or web sites</li>
            <li>interviews</li>
            <li>questionnaires</li>
            <li>emails</li>
        </ul>
    </li>

    <li>Produce a narrative of the facts gathered.</li>

    <li>
    This document should explain, in paragraph format, the study of the current
    system (i.e., the narrative describes the findings from the facts gathered).
    What does the current system do? How does the current system operate?
    What activities must be done?  Who does the different activities?
    When and where are the activities done?
    </li>

    <li>
    This narrative should be <strong>DETAILED</strong>!
    All information that is relevant to the development of the to-be system
    needs to be included. Exactly how each step is currently accomplished and
    how will it change in the to-be system?
    What are the processes and how are they accomplished, step-by-step?
    </li>

    <li>
    These are the specific requirements for your database as outlined by the client.
    You and the client should discuss these requirements at length and come to
    an agreement of what your system has to do.
    How will your database structure support the user requirements?
    </li>
</ul>

<h3>UML Diagrams</h3>
<ul>
    <li>
    Include high-level Use Case diagrams for your project as you see it now.
    The Use Case diagrams for this phase should be at the “white” level,
    as described in your Systems Analysis &amp; Design course.
    </li>

    <li>Complete a use case template for each activity.</li>

    <li>
    Include additional high-level UML diagrams as appropriate to convey important
    high-level information regarding the current process and/or proposed solution.
    </li>
</ul>

<h3>Entity Relationship Diagram</h3>
<p>
Provide an ER diagram that shows your database’s entities and relationships.
You should use the Visio Database Model diagram template to draw your model.
In addition to the graphical representation, walk me through the database.
Tell me, in text, what your diagram is telling me.
Don’t give me a verbatim translation (“each customer has many orders;
each order is for one customer”).
Explain this as you would to an intelligent, but not database-literate, client.
The ERD and explanation are the formalization of the requirements in the previous section.
Being able to describe this to a client lets them know that you understand what they need.
</p>

<h3>Preliminary Data Dictionary</h3>
<p>
You need to document your entities and any attributes that you have identified so far.
This is done in the data dictionary.
The complete data dictionary will be more extensive,
but this will be a good start at documenting your database.
The data dictionary at this point should include all attributes and should have
the fields in the example below, at a minimum:
</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Table</th>
            <th>Field Name</th>
            <th>P/F Key</th>
            <th>Description</th>
            <th>Data Type</th>
            <th>Field Size</th>
            <th>Constraints</th>
            <th>Possible Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>MANAGER</td>
            <td>ManagerID</td>
            <td>PK</td>
            <td>Manager Identification Number</td>
            <td>INTEGER</td>
            <td>2^31</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>MANAGER</td>
            <td>M_FirstName</td>
            <td></td>
            <td></td>
            <td>VARCHAR</td>
            <td>20</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>MANAGER</td>
            <td>M_LastName</td>
            <td></td>
            <td></td>
            <td>VARCHAR</td>
            <td>20</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>PLAYER</td>
            <td>PlayerID</td>
            <td>PK</td>
            <td>Player Identification Number</td>
            <td>INTEGER</td>
            <td>2^31</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>PLAYER</td>
            <td>P_FirstName</td>
            <td></td>
            <td></td>
            <td>VARCHAR</td>
            <td>20</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>PLAYER</td>
            <td>P_LastName</td>
            <td></td>
            <td></td>
            <td>VARCHAR</td>
            <td>20</td>
            <td>NOT NULL</td>
            <td></td>
        </tr>
        <tr>
            <td>PLAYER</td>
            <td>Status</td>
            <td></td>
            <td>Whether the player is active or retired.</td>
            <td>CHAR</td>
            <td>1</td>
            <td>NOT NULL</td>
            <td>{A (Active), R (Retired)}</td>
        </tr>
    </tbody>
</table>

<h3>Non-Functional Prototype</h3>
<p>
A series of screenshots with walkthroughs and/or a Visual Studio project
containing a pseudo-functional (navigable) copy of the application.
It does not have to connect to a database and actually “do” anything yet,
but should provide a good initial glance at how the system will work.
</p>

</div>
</section>


<section class="panel panel-default">
<div class="panel-heading">
<h2 id="physical">Physical Design &amp; Working Prototype - 25 points</h2>
</div>
<div class="panel-body">

<p>
In this deliverable, you will submit the logical design of your database.
This is one step closer to your implementation.
Here you finalize your attributes and make decisions such as what type of
attributes you will have, how big they will be, what their domain is, and so on.
Your report should include the following sections:
</p>

<h3>Introduction</h3>
<p>
Restate briefly what your project is and how it will be used.
</p>

<h3>UML Diagrams</h3>
<ul>
    <li>
    Include lower-level Use Case diagrams for your project.
    The Use Case diagrams for this phase should be at the “kite” and “sea” levels,
    as described in your Systems Analysis &amp; Design course.
    </li>

    <li>Enter a description for each actor and activity.</li>

    <li>
    Include additional UML diagrams as appropriate to convey important
    high-level information regarding the proposed solution.
    </li>
</ul>

<h3>ERD with Logical &amp; Physical Data Model</h3>
<p>
Give me another copy of your ER diagram. As you continue to examine your project,
you may have reconsidered some aspects of your design.
Give me your current conceptual design.
If your new design is significantly different from your previous design,
you might want to give me both your old design and your new design,
and point out what you changed and why.
Be sure that your design is in third normal form (3NF).
If you feel that you must violate 3NF please document and justify this departure.
Indicate the relation names, primary keys, foreign keys, and all attributes.
</p>

<h3>Data Dictionary</h3>
<p>
Update your data dictionary to include all of the attributes in your relational model.
Add columns to indicate what kind of attribute it is, where it is used,
its data type, and whether it is acting as a key.
Make sure that you include physical descriptions, characteristics, values,
and meanings for each attribute.
</p>

<h3>Data Definition Language</h3>
<p>
You should have your tables created with sample data in each one.
Include the DDL for your schema (CREATE statements) with your submission.
I will also be exploring the database and selecting data.
</p>

<h3>Data Manipulation Language</h3>
<p>
Include the SQL statements (along with a sample of output or expected output,
where appropriate) that will be used by the application to create, read, update,
and insert data.
This is a significant undertaking, and while the actual SQL used may change as
you go forward, this will help give you an idea of what you’ll need to do.
</p>

<h3>Working Prototype</h3>
<p>
Include screenshots for all of the screens needed for all of your transactions and reports.
Basic processes should be functional (or least appear functional) and should
display all of the items that need to be seen by each user.
Include in your deliverables a compiled executable binary of the functioning
version of your prototype.
At this point, it should be selecting most of the actual data required, and the
primary insert statements should be functional. All that should be left is to
implement final details and any update/delete functionality.
</p>

</div>
</section>


<section class="panel panel-default">
<div class="panel-heading">
<h2 id="application">Finished Application - 25 points</h2>
</div>
<div class="panel-body">

<p>
You have already completed most of the documentation needed for the final deliverable.
What’s needed now is for you to put them together into a single document.
This should consist of a single document describing your analysis and design for your project.
You should have to do little or no new writing for this part.
The main thing is to clean up any problems that you had on the previous deliverables
and make the entire document flow smoothly.
Remember, this is to be a professional-level document.
For many of you, this is your last chance to "practice" before you submit
something like this to someone who is paying you.
A considerable portion of your grade will be determined by the structure,
"flow," and quality of your document.
The sections to be included are:
</p>
<ul>
    <li>Introduction</li>
    <li>Executive Summary</li>
    <li>Project Schedule</li>
    <li>Statement of Scope</li>
    <li>Requirements Specification</li>
</ul>

<h3>ERD and Data Dictionary</h3>
<p>
Include your finalized ERD and data model.
The data dictionary should include everything that is in your implementation.
You should have entries for entities, all of each entity’s attributes,
all queries, all forms and all reports.
This is to help me figure out what a (for example) query does without having to
open it up and check out the SQL.
</p>

<h3>DBA Guide</h3>
<p>
We have addressed a number of additional topics during the semester.
You need to apply these topics to your database project if applicable.
This section should address such things as database security
(system security and physical security), database maintenance, and so on.
This section does not have to be very large, maybe a few paragraphs,
but you need to address these issues as they apply to your client.
In addition, you need to address the issue of database conversion.
Once they implement your database, how does your client load the data they
already have from their legacy system?
</p>

<h3>User Manual</h3>
<p>
Give me a short user manual for your implementation.
You should tell me which is your main screen, what kind(s) of business
process(es) it supports, and give me a walkthrough of its capabilities.
Hint: Multiple screen shots are very helpful here.
</p>

<h3>What I Would Do Differently</h3>
<p>
This is an important section of your deliverable.
I expect that you learned something as the semester progressed.
This means that you probably see something in your project as it sits now that
isn't quite right, and you would probably have done differently if you saw it earlier.
There isn't time to go back and fix it now, but you can at least tell me what it
is and what you would change if you had to do the project all over again.
This section applies to both your final deliverable and to your implementation.
</p>

<h3>Working Database &amp; Application</h3>
<p>
In this project you get to create a working database application containing everything
from the basic tables to navigation screens, data entry forms, reports, and queries.
You must use a modern RDBMS such as SQL Server, Teradata, DB2, etc. and may use
any application development software tool of your choosing (VB, C#, Java, etc…).
Your requirements for the project are complex enough that they should involve at
least 3 complex (2 or more tables) queries.
If they are not that complex, please add the appropriate number of complex queries
to get the number up to 3.
I am concerned mostly about your thought processes.
I want to see if you are looking at your database correctly.
If your queries are not fancy, your forms are rather basic, and your reports have
only the necessary information, that’s fine as long as you get the job done.
Of course, good database design will be regarded more highly than fancy
programming skills for this project.
Please attach a zip file containing your working executable binary as well as the source code
with all final documentation and presentations through the assignment link on Blackboard.
It would be really nice if you uploaded all the source code to github for easy review.
</p>

</div>
</section>


<section class="panel panel-default">
<div class="panel-heading">
<h2 id="presentation">Presentation - 10 points</h2>
</div>
<div class="panel-body">

<p>
You will be presenting your project to the class as a final component of your project.
Below you will find the rubric used for grading of the in-class project presentation:
</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Criteria</th>
            <th>0 points</th>
            <th>0.5 point</th>
            <th>1 point</th>
            <th>2 points</th>
            <th>4 points</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Demonstration of Working System (4 points)</td>
            <td>System not presented</td>
            <td>System barely presented</td>
            <td>System presented but major functions were not covered</td>
            <td>System presented but minor functions were not covered</td>
            <td>System presented thoroughly</td>
        </tr>
        <tr>
            <td>Approach to Problem Solving (1 point)</td>
            <td>Approach not described</td>
            <td>Approach presented but not well-explained</td>
            <td>Approach analyzed and presented thoroughly</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Lessons Learned (2 points)</td>
            <td>Lessons learned now described</td>
            <td>Lessons learned described ineffectively</td>
            <td>Lessons learned adequately described</td>
            <td>Lessons learned well-described and application to industry</td>
            <td></td>
        </tr>
        <tr>
            <td>Original Vision (1 point)</td>
            <td>Original Vision vs. End Problem not covered</td>
            <td>Original vs. delivered covered ineffectively</td>
            <td>Original vs. delivered covered well with path forward</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Cohesive Summary (1 point)</td>
            <td>Presentation omitted multiple key areas of coverage</td>
            <td>Presentation omitted 1 key or multiple minor areas of coverage</td>
            <td>Presentation coverage was adequate and cohesive</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Professional Manner (1 point)</td>
            <td>Significant lapses in professionalism observed in presentation</td>
            <td>Moderate lapses in professionalism noted in presentation</td>
            <td>High level of professionalism demonstrated in polished presentation</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
</section>

<section class="panel panel-default">
<div class="panel-heading">
<h2 id="peer-evaluation">Peer Evaluation - 3 points</h2>
</div>
<div class="panel-body">

<p>
After presentations, a peer evaluation sheet will be completed by each person.
This evaluation will cover your team members’ contribution and have a
<strong>DIRECT</strong> bearing on your individual scores for the project.
Each student’s participation in the project should be equally split.
The awarded points will be determined by each group’s individual peer reviews.
</p>

</div>
</section>


@endsection
