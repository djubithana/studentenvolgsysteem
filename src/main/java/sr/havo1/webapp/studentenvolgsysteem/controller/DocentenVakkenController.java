package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.DocentenVakkenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.DocentenVakken;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;

/**
 * Created by DENCIO on 7/18/2018.
 */

@Path("/docentenVakken")
public class DocentenVakkenController {

    private DocentenVakkenDAO docentenVakkenDAO = new DocentenVakkenDAO();

    @Path("/addDocentVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public DocentenVakken add(DocentenVakken docentVak) {
        return docentenVakkenDAO.addDocentVak(docentVak);
    }

    @Path("/removeDocentVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public DocentenVakken remove(DocentenVakken docentVak) {
        docentenVakkenDAO.deleteDocentVak(docentVak);
        return docentVak;
    }

    @Path("/getDocentVak")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public DocentenVakken getDocentVak(DocentenVakken docentVak) {
        return docentenVakkenDAO.getDocentVak(docentVak.getDocent_vak_id());
    }

}
