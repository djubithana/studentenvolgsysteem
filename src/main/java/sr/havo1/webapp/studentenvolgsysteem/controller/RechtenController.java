package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.RechtenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Rechten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 6/20/2018.
 */

@Path("/rechten")
public class RechtenController {

    private RechtenDAO rechtenDAO = new RechtenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Rechten> findAll() {
        return rechtenDAO.loadAllRechten();
    }

    @Path("/addRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rechten add(Rechten recht) {
        return rechtenDAO.addRecht(recht);
    }

    @Path("/updateRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rechten update(Rechten recht) {
        rechtenDAO.updateRecht(recht);
        return recht;
    }

    @Path("/removeRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rechten remove(Rechten recht) {
        rechtenDAO.deleteRecht(recht);
        return recht;
    }

    @Path("/getRecht")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Rechten getRecht(Rechten recht) {
        return rechtenDAO.getRecht(recht.getRecht_id());
    }


}
