package sr.havo1.webapp.studentenvolgsysteem;

import sr.havo1.webapp.studentenvolgsysteem.dao.*;
import sr.havo1.webapp.studentenvolgsysteem.entity.*;

import java.time.Year;
import java.util.Calendar;

/**
 * Created by DENCIO on 6/11/2018.
 */
public class App {

    public static void main(String[] args) {

        /*Schooljaar s = new Schooljaar();
        s.setSchooljaar(2019);
        s.setStatus(false);

        SchooljaarDAO sdao = new SchooljaarDAO();
        sdao.addSchooljaar(s);*/

        /*Vakken vak = new Vakken();
        vak.setVaknaam("Engels");
        vak.setAfkorting("N/A");

        VakkenDAO vakkenDAO = new VakkenDAO();
        vakkenDAO.addVak(vak);*/

        /*RechtenDAO rechtenDAO = new RechtenDAO();
        Rechten rechtUpdate = rechtenDAO.getRecht(2L);
        rechtUpdate.setRechtnaam("Gebruikers beheren");
        rechtenDAO.updateRecht(rechtUpdate);*/

        /*RollenDAO rollenDAO = new RollenDAO();
        Rollen rolUpdate = rollenDAO.getRol(3L);
        rolUpdate.setRolnaam("Leeraar");
        rollenDAO.updateRol(rolUpdate);*/

        /*RollenDAO rollenDAO = new RollenDAO();
        Rollen rol = rollenDAO.getRol(5L);
        rollenDAO.deleteRol(rol);*/

        /*RechtenDAO rechtenDAO = new RechtenDAO();
        RollenDAO rollenDAO = new RollenDAO();

        RollenRechten rr = new RollenRechten();
        rr.setRol_id(rollenDAO.getRol(5L));
        rr.setRecht_id(rechtenDAO.getRecht(6L));

        RollenRechtenDAO rrdao = new RollenRechtenDAO();
        rrdao.addRolRecht(rr);*/

        /*RollenRechtenDAO rrdao = new RollenRechtenDAO();
        RollenRechten rr = rrdao.getRolRecht(5L);
        rrdao.deleteRolRecht(rr);*/

        /*Docenten d = new Docenten();
        d.setVoornaam("Valerie");
        d.setAchternaam("Martodikromo");
        d.setEmail("vally@live.com");
        d.setTelefoon(8123457);
        d.setMobiel(356293);

        DocentenDAO dd = new DocentenDAO();
        dd.addDocent(d);*/

        /*DocentenDAO docentenDAO = new DocentenDAO();
        Docenten docentUpdate = docentenDAO.getDocent(3L);
        docentUpdate.setVoornaam("Chanise");
        docentenDAO.updateDocent(docentUpdate);*/

        /*DocentenDAO docentenDAO = new DocentenDAO();
        Docenten docent = docentenDAO.getDocent(1L);
        docentenDAO.deleteDocent(docent);*/

        /*RollenRechtenDAO rrdao = new RollenRechtenDAO();

        Gebruikers d = new Gebruikers();
        d.setVoornaam("Valerie");
        d.setAchternaam("Martodikromo");
        d.setEmail("vally@live.com");
        d.setWachtwoord("password");
        d.setRegistratiedatum(new java.sql.Timestamp(Calendar.getInstance().getTime().getTime()));
        d.setLaatst_ingelogd_op(new java.sql.Timestamp(Calendar.getInstance().getTime().getTime()));
        d.setRol_recht_id(rrdao.getRolRecht(1L));

        GebruikersDAO dd = new GebruikersDAO();
        dd.addGebruiker(d);*/

    }
}
