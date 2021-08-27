


<p>Name : {{ $request->name }}</p>
<p>Company Name : {{ $request->company_name }}</p>
<p>Email : {{ $request->email }}</p>
<p>Telephone : {{ $request->telephone ?? 'N/A' }}</p>
<p>Project Brief : {{ $request->project_brief }}</p>
<p>Appointment Date & Time : {{ $request->appoiment_date_time }}</p>
<p>Additional Notes : {{ $request->additional_note }}</p>
