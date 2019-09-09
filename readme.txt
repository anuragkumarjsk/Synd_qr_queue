the webapp is implemented on local host , it will be later on hosted on a server
we have used buttons and links as substitute for qr code stickers

localhost:1234/Series/hackathon/<files>

the session initiation happens through form.html
the 

deskchoice.php generates token number and information about the counter the user is supposed to visit. 

finish_transaction is triggered when the user scans qr2 and index2.html, notifies the customer in waiting
of his turn.

we have used 2 tables called iptable and finished_transaction tables.

ip tables records: [token_id, ip_address, time stamp and desk info] of people scanning QR1.

finished transaction table stores: [token id and ip_address] of people scanning QR2. 
 