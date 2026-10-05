<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Finger Akses Unit 2</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background: #f4f4f4; }
        h1 { color: #2c3e50; }
        h2 { background: #2c3e50; color: white; padding: 8px 12px; border-radius: 4px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; background: white; }
        th, td { border: 1px solid #ddd; padding: 8px 12px; text-align: left; }
        th { background: #34495e; color: white; }
        .status-online { color: green; font-weight: bold; }
        .status-offline { color: red; font-weight: bold; }
        .status-unknown { color: gray; }
    </style>
</head>
<body>
    <h1>Monitoring Finger Akses Unit 2</h1>

    @foreach ($groupedData as $unit => $rooms)
        <h2>{{ $unit }}</h2>
        <table>
            <thead>
                <tr>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>IP Address</th>
                    <th>Status</th>
                    <th>Terakhir Dicek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->kode_ruangan }}</td>
                        <td>{{ $room->nama_ruangan ?? '-' }}</td>
                        <td>{{ $room->ip_address ?? '-' }}</td>
                        <td class="status-{{ $room->status }}">{{ strtoupper($room->status) }}</td>
                        <td>{{ $room->last_checked_at ?? 'Belum dicek' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</body>
</html>