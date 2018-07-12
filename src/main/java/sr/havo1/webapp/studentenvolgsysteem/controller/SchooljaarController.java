package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.SchooljaarDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Schooljaar;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 6/30/2018.
 */

@Path("/schooljaar")
public class SchooljaarController {

    private SchooljaarDAO schooljaarDAO = new SchooljaarDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Schooljaar> findAll() {
        return schooljaarDAO.loadAllSchooljaar();
    }

    @Path("/addSchooljaar")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Schooljaar add(Schooljaar schooljaar) {
        return schooljaarDAO.addSchooljaar(schooljaar);
    }

    @Path("/updateSchooljaar")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Schooljaar update(Schooljaar schooljaar) {
        schooljaarDAO.updateSchooljaar(schooljaar);
        return schooljaar;
    }

    @Path("/removeSchooljaar")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Schooljaar remove(Schooljaar schooljaar) {
        schooljaarDAO.deleteSchooljaar(schooljaar);
        return schooljaar;
    }

    @Path("/getSchooljaar")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Schooljaar getSchooljaar(Schooljaar schooljaar) {
        return schooljaarDAO.getSchooljaar(schooljaar.getSchooljaar_id());
    }
}
