<h3>Anfrage übers Kontaktformular</h3><br>
<h5>Client-Daten:</h5><br>
IP: {{ $request->ip() }}<br>
Agent: {{ $request->userAgent() }}<br>
Session: {{ $request->hasSession() ? $request->session()->getId() : 'Nicht vorhanden' }}<br>
