package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.DistrictenDAO;
import sr.havo1.webapp.studentenvolgsysteem.dao.PakkettenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Districten;
import sr.havo1.webapp.studentenvolgsysteem.entity.Pakketten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

@Path("/pakketten")
public class PakkettenController {
    private PakkettenDAO pakkettenDAO = new PakkettenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Pakketten> findAll() {
        return pakkettenDAO.loadAllePakketten();
    }

    @Path("/getPakket")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Pakketten getPakketten(Pakketten pakketten) {
        return pakkettenDAO.getPakket(pakketten.getPakket_id());
    }
}
