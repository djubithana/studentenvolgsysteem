package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.VakkenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Vakken;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 7/9/2018.
 */

@Path("/vakken")
public class VakkenController {

    private VakkenDAO vakkenDAO = new VakkenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Vakken> findAll() {
        return vakkenDAO.loadAllVakken();
    }

    @Path("/addVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Vakken add(Vakken vak) {
        return vakkenDAO.addVak(vak);
    }

    @Path("/updateVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Vakken update(Vakken vak) {
        vakkenDAO.updateVak(vak);
        return vak;
    }

    @Path("/removeVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Vakken remove(Vakken vak) {
        vakkenDAO.deleteVak(vak);
        return vak;
    }

    @Path("/getVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Vakken getVak(long vak) {
        return vakkenDAO.getVak(vak);
    }



}
