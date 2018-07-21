package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.KeuzevakkenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Keuzevakken;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 7/18/2018.
 */

@Path("/keuzevakken")
public class KeuzevakkenController {

    private KeuzevakkenDAO keuzevakkenDAO = new KeuzevakkenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Keuzevakken> findAll() {
        return keuzevakkenDAO.loadAllKeuzevakken();
    }

    @Path("/addKeuzevak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Keuzevakken add(Keuzevakken keuzevak) {
        return keuzevakkenDAO.addKeuzevak(keuzevak);
    }

    @Path("/updateKeuzevak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Keuzevakken update(Keuzevakken keuzevak) {
        keuzevakkenDAO.updateKeuzevak(keuzevak);
        return keuzevak;
    }

    @Path("/removeKeuzevak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Keuzevakken remove(Keuzevakken keuzevak) {
        keuzevakkenDAO.deleteKeuzevak(keuzevak);
        return keuzevak;
    }

    @Path("/getKeuzevak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Keuzevakken getKeuzevak(Keuzevakken keuzevak) {
        return keuzevakkenDAO.getKeuzevak(keuzevak.getKeuzevak_id());
    }

}
