package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.GebruikersDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Gebruikers;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 6/26/2018.
 */

@Path("/gebruikers")
public class GebruikersController {

    private GebruikersDAO gebruikersDAO = new GebruikersDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Gebruikers> findAll() {
        return gebruikersDAO.loadAllGebruikers();
    }

    @Path("/addGebruiker")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Gebruikers add(Gebruikers gebruiker) {
        return gebruikersDAO.addGebruiker(gebruiker);
    }

    @Path("/updateGebruiker")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Gebruikers update(Gebruikers gebruiker) {
        gebruikersDAO.updateGebruiker(gebruiker);
        return gebruiker;
    }

    @Path("/removeGebruiker")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Gebruikers remove(Gebruikers gebruiker) {
        gebruikersDAO.deleteGebruiker(gebruiker);
        return gebruiker;
    }

    @Path("/getGebruiker")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Gebruikers getGebruiker(Gebruikers gebruiker) {
        return gebruikersDAO.getGebruiker(gebruiker.getGebruiker_id());
    }

}
