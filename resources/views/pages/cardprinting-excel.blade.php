<p>Card Printing Batch Details</p>
<br>
<p>Batch {{ $payload['batchDetail']->cpb_id }}</p>
<table>
    <tr>
        <td>Status</td>
        @if($list->cpb_status == 0)
            <td>Pending to be Sent</td>
        @elseif($list->cpb_status == 1)
            <td>Sent</td>
        @elseif($list->cpb_status == 2)
            <td>Received</td>
        @endif

        <td>Supplier</td>
        <td>{{ $payload['batchDetail']->supplier_name }}</td>
    </tr>
    <tr>
        <td>Sent Date</td>
        <td>{{ $payload['batchDetail']->sent_date }}</td>

        <td>Received Date</td>
        <td>{{ $payload['batchDetail']->receive_date }}</td>
    </tr>
    <tr>
        <td>Invoice No.</td>
        <td>{{ $payload['batchDetail']->invoice_no }}</td>

        <td>Consignment No</td>
        <td>{{ $payload['batchDetail']->consignment_no }}</td>
    </tr>
    <tr>
        <td>Courier Payment</td>
        <td>RM {{ $payload['batchDetail']->courier_payment }}</td>

    </tr>
</table>

<table>
    <thead>
    <tr>
        <th>Membership No.</th>
        <th>Members Name (Primary)</th>
        <th>Members Name (Secondary)</th>
        <th>Card Expiry Date</th>
    </tr>
    </thead>
    <tbody>
        @foreach($payload['memberList'] as $mbr)
            <tr>
                <td>{{ $mbr->mbrship_no }}</td>
                <td>{{ $mbr->name1 }}</td>
                <td>{{ $mbr->name2 }}</td>
                <td>{{ $mbr->mbrship_exp }}</td>
            </tr>
        @endforeach()
        
    </tbody>
</table> 