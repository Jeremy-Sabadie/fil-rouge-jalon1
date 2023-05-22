<h3>Tickets fermés</h3>
<table>
            <tbody>
                <tr>
                    <th>libellé:</th>
                    <td>info</td>
                </tr>
            </tbody>
                <tr>
                    <th>numéro de ticket</th>
                    <td> @yield('ticket.id')</td>
                </tr>
                <tr>
                    <th>type de panne</th>
                    <td> @yield('ticket.type')</td>
                </tr>
                <tr>
                    <th>nom utilisateur</th>
                    <td> @yield('ticket.user')</td>
                </tr>
                <tr>
                    <th>pris en charge par</th>
                    <td> @yield('ticket.repairer')</td>
                </tr>
                <tr>
                    <th>date dd'ouverture</th>
                    <td> @yield('ticket.date')</td>
                </tr>

        </table>
