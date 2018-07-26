package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.DistrictenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Districten;


import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

@Path("/districten")

public class DistrictenController {
    private DistrictenDAO districtenDOA = new DistrictenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Districten> findAll() {
        return districtenDOA.loadAlleDistricten();
    }

    @Path("/getDistrict")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Districten getDistrict(Districten district) {
        return districtenDOA.getDistrict(district.getDistrict_id());
    }
}
