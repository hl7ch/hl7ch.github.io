# EDQM - Pharmaceutical Dose Form - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Pharmaceutical Dose Form**

## ValueSet: EDQM - Pharmaceutical Dose Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/edqm-pharmaceutical-dose-form | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EdqmPharmaceuticalDoseFormVS |
| *Other Identifiers:*OID:0.4.0.127.0.16.1.1.2.2 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Pharmaceutical Dose Form 

 **References** 

* Included into [ChSMCAuthorisedPharmaceuticalDoseFormVS](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md)
* [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R5/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "edqm-pharmaceutical-dose-form",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-pharmaceutical-dose-form",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.2"
    }
  ],
  "version" : "1.0.0",
  "name" : "EdqmPharmaceuticalDoseFormVS",
  "title" : "EDQM - Pharmaceutical Dose Form",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Value Set for the Pharmaceutical Dose Form",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "concept" : [
          {
            "code" : "10100500",
            "display" : "Concentrate for oral suspension"
          },
          {
            "code" : "10101000",
            "display" : "Oral drops, solution"
          },
          {
            "code" : "10102000",
            "display" : "Oral drops, suspension"
          },
          {
            "code" : "10103000",
            "display" : "Oral drops, emulsion"
          },
          {
            "code" : "10104000",
            "display" : "Oral liquid"
          },
          {
            "code" : "10105000",
            "display" : "Oral solution"
          },
          {
            "code" : "10106000",
            "display" : "Oral suspension"
          },
          {
            "code" : "10107000",
            "display" : "Oral emulsion"
          },
          {
            "code" : "10108000",
            "display" : "Oral gel"
          },
          {
            "code" : "10109000",
            "display" : "Oral paste"
          },
          {
            "code" : "10110000",
            "display" : "Powder for oral solution"
          },
          {
            "code" : "10111000",
            "display" : "Powder for oral suspension"
          },
          {
            "code" : "10112000",
            "display" : "Granules for oral solution"
          },
          {
            "code" : "10113000",
            "display" : "Granules for oral suspension"
          },
          {
            "code" : "10116000",
            "display" : "Lyophilisate for suspension"
          },
          {
            "code" : "10117000",
            "display" : "Syrup"
          },
          {
            "code" : "10118000",
            "display" : "Powder for syrup"
          },
          {
            "code" : "10119000",
            "display" : "Granules for syrup"
          },
          {
            "code" : "10120000",
            "display" : "Soluble tablet"
          },
          {
            "code" : "10121000",
            "display" : "Dispersible tablet"
          },
          {
            "code" : "10121500",
            "display" : "Dispersible tablets for dose dispenser"
          },
          {
            "code" : "10122000",
            "display" : "Herbal tea"
          },
          {
            "code" : "10201000",
            "display" : "Oral powder"
          },
          {
            "code" : "10202000",
            "display" : "Instant herbal tea"
          },
          {
            "code" : "10203000",
            "display" : "Effervescent powder"
          },
          {
            "code" : "10204000",
            "display" : "Granules"
          },
          {
            "code" : "10205000",
            "display" : "Effervescent granules"
          },
          {
            "code" : "10206000",
            "display" : "Gastro-resistant granules"
          },
          {
            "code" : "10207000",
            "display" : "Prolonged-release granules"
          },
          {
            "code" : "10208000",
            "display" : "Modified-release granules"
          },
          {
            "code" : "10209000",
            "display" : "Cachet"
          },
          {
            "code" : "10210000",
            "display" : "Capsule, hard"
          },
          {
            "code" : "10211000",
            "display" : "Capsule, soft"
          },
          {
            "code" : "10212000",
            "display" : "Gastro-resistant capsule, hard"
          },
          {
            "code" : "10213000",
            "display" : "Gastro-resistant capsule, soft"
          },
          {
            "code" : "10214000",
            "display" : "Chewable capsule, soft"
          },
          {
            "code" : "10215000",
            "display" : "Prolonged-release capsule, hard"
          },
          {
            "code" : "10216000",
            "display" : "Prolonged-release capsule, soft"
          },
          {
            "code" : "10217000",
            "display" : "Modified-release capsule, hard"
          },
          {
            "code" : "10218000",
            "display" : "Modified-release capsule, soft"
          },
          {
            "code" : "10219000",
            "display" : "Tablet"
          },
          {
            "code" : "10220000",
            "display" : "Coated tablet"
          },
          {
            "code" : "10221000",
            "display" : "Film-coated tablet"
          },
          {
            "code" : "10222000",
            "display" : "Effervescent tablet"
          },
          {
            "code" : "10223000",
            "display" : "Orodispersible tablet"
          },
          {
            "code" : "10224000",
            "display" : "Oral lyophilisate"
          },
          {
            "code" : "10225000",
            "display" : "Gastro-resistant tablet"
          },
          {
            "code" : "10226000",
            "display" : "Prolonged-release tablet"
          },
          {
            "code" : "10227000",
            "display" : "Modified-release tablet"
          },
          {
            "code" : "10228000",
            "display" : "Chewable tablet"
          },
          {
            "code" : "10229000",
            "display" : "Medicated chewing-gum"
          },
          {
            "code" : "10230000",
            "display" : "Oral gum"
          },
          {
            "code" : "10230500",
            "display" : "Pill"
          },
          {
            "code" : "10231000",
            "display" : "Pillules"
          },
          {
            "code" : "10232000",
            "display" : "Continuous-release intraruminal device"
          },
          {
            "code" : "10233000",
            "display" : "Pulsatile-release intraruminal device"
          },
          {
            "code" : "10234000",
            "display" : "Lick block"
          },
          {
            "code" : "10235000",
            "display" : "Premix for medicated feeding stuff"
          },
          {
            "code" : "10236000",
            "display" : "Medicated pellets"
          },
          {
            "code" : "10236100",
            "display" : "Orodispersible film"
          },
          {
            "code" : "10301000",
            "display" : "Gargle"
          },
          {
            "code" : "10302000",
            "display" : "Concentrate for gargle"
          },
          {
            "code" : "10303000",
            "display" : "Gargle, powder for solution"
          },
          {
            "code" : "10304000",
            "display" : "Gargle, tablet for solution"
          },
          {
            "code" : "10305000",
            "display" : "Oromucosal solution"
          },
          {
            "code" : "10306000",
            "display" : "Oromucosal suspension"
          },
          {
            "code" : "10307000",
            "display" : "Oromucosal drops"
          },
          {
            "code" : "10308000",
            "display" : "Oromucosal spray"
          },
          {
            "code" : "10308100",
            "display" : "Oromucosal spray, emulsion"
          },
          {
            "code" : "10308200",
            "display" : "Oromucosal spray, solution"
          },
          {
            "code" : "10308300",
            "display" : "Oromucosal spray, suspension"
          },
          {
            "code" : "10309000",
            "display" : "Sublingual spray"
          },
          {
            "code" : "10309100",
            "display" : "Sublingual spray, emulsion"
          },
          {
            "code" : "10309200",
            "display" : "Sublingual spray, solution"
          },
          {
            "code" : "10309300",
            "display" : "Sublingual spray, suspension"
          },
          {
            "code" : "10310000",
            "display" : "Mouthwash"
          },
          {
            "code" : "10311000",
            "display" : "Mouthwash, tablet for solution"
          },
          {
            "code" : "10312000",
            "display" : "Gingival solution"
          },
          {
            "code" : "10313000",
            "display" : "Oromucosal gel"
          },
          {
            "code" : "10314000",
            "display" : "Oromucosal paste"
          },
          {
            "code" : "10314005",
            "display" : "Oromucosal ointment"
          },
          {
            "code" : "10314010",
            "display" : "Oromucosal cream"
          },
          {
            "code" : "10314011",
            "display" : "Buccal film"
          },
          {
            "code" : "10315000",
            "display" : "Gingival gel"
          },
          {
            "code" : "10316000",
            "display" : "Gingival paste"
          },
          {
            "code" : "10317000",
            "display" : "Oromucosal capsule"
          },
          {
            "code" : "10317500",
            "display" : "Sublingual film"
          },
          {
            "code" : "10318000",
            "display" : "Sublingual tablet"
          },
          {
            "code" : "10319000",
            "display" : "Muco-adhesive buccal tablet"
          },
          {
            "code" : "10320000",
            "display" : "Buccal tablet"
          },
          {
            "code" : "10321000",
            "display" : "Lozenge"
          },
          {
            "code" : "10322000",
            "display" : "Compressed lozenge"
          },
          {
            "code" : "10323000",
            "display" : "Pastille"
          },
          {
            "code" : "10401000",
            "display" : "Periodontal powder"
          },
          {
            "code" : "10401500",
            "display" : "Dental cement"
          },
          {
            "code" : "10402000",
            "display" : "Dental gel"
          },
          {
            "code" : "10403000",
            "display" : "Dental stick"
          },
          {
            "code" : "10404000",
            "display" : "Dental insert"
          },
          {
            "code" : "10405000",
            "display" : "Dental powder"
          },
          {
            "code" : "10406000",
            "display" : "Dental solution"
          },
          {
            "code" : "10407000",
            "display" : "Dental suspension"
          },
          {
            "code" : "10408000",
            "display" : "Dental emulsion"
          },
          {
            "code" : "10409000",
            "display" : "Toothpaste"
          },
          {
            "code" : "10410000",
            "display" : "Periodontal gel"
          },
          {
            "code" : "10411000",
            "display" : "Periodontal insert"
          },
          {
            "code" : "10413000",
            "display" : "Powder for dental cement"
          },
          {
            "code" : "10414000",
            "display" : "Solution for dental cement"
          },
          {
            "code" : "10501000",
            "display" : "Bath additive"
          },
          {
            "code" : "10502000",
            "display" : "Cream"
          },
          {
            "code" : "10503000",
            "display" : "Gel"
          },
          {
            "code" : "10504000",
            "display" : "Ointment"
          },
          {
            "code" : "10505000",
            "display" : "Cutaneous paste"
          },
          {
            "code" : "10506000",
            "display" : "Medicated plaster"
          },
          {
            "code" : "10507000",
            "display" : "Cutaneous foam"
          },
          {
            "code" : "10508000",
            "display" : "Shampoo"
          },
          {
            "code" : "10509000",
            "display" : "Cutaneous spray, solution"
          },
          {
            "code" : "10510000",
            "display" : "Cutaneous spray, suspension"
          },
          {
            "code" : "10511000",
            "display" : "Cutaneous spray, powder"
          },
          {
            "code" : "10512000",
            "display" : "Cutaneous liquid"
          },
          {
            "code" : "10513000",
            "display" : "Cutaneous solution"
          },
          {
            "code" : "10514000",
            "display" : "Concentrate for cutaneous solution"
          },
          {
            "code" : "10514500",
            "display" : "Powder for cutaneous solution"
          },
          {
            "code" : "10515000",
            "display" : "Cutaneous suspension"
          },
          {
            "code" : "10516000",
            "display" : "Cutaneous emulsion"
          },
          {
            "code" : "10517000",
            "display" : "Cutaneous powder"
          },
          {
            "code" : "10517500",
            "display" : "Cutaneous patch"
          },
          {
            "code" : "10518000",
            "display" : "Solution for iontophoresis"
          },
          {
            "code" : "10518500",
            "display" : "Powder for solution for iontophoresis"
          },
          {
            "code" : "10519000",
            "display" : "Transdermal patch"
          },
          {
            "code" : "10520000",
            "display" : "Collodion"
          },
          {
            "code" : "10521000",
            "display" : "Medicated nail lacquer"
          },
          {
            "code" : "10521500",
            "display" : "Nail solution"
          },
          {
            "code" : "10522000",
            "display" : "Poultice"
          },
          {
            "code" : "10523000",
            "display" : "Cutaneous stick"
          },
          {
            "code" : "10524000",
            "display" : "Cutaneous sponge"
          },
          {
            "code" : "10525000",
            "display" : "Impregnated dressing"
          },
          {
            "code" : "10526000",
            "display" : "Collar"
          },
          {
            "code" : "10526500",
            "display" : "Medicated collar"
          },
          {
            "code" : "10527000",
            "display" : "Medicated pendant"
          },
          {
            "code" : "10528000",
            "display" : "Ear tag"
          },
          {
            "code" : "10529000",
            "display" : "Dip solution"
          },
          {
            "code" : "10530000",
            "display" : "Dip suspension"
          },
          {
            "code" : "10531000",
            "display" : "Dip emulsion"
          },
          {
            "code" : "10532000",
            "display" : "Concentrate for dip solution"
          },
          {
            "code" : "10533000",
            "display" : "Concentrate for dip suspension"
          },
          {
            "code" : "10534000",
            "display" : "Concentrate for dip emulsion"
          },
          {
            "code" : "10534500",
            "display" : "Powder for dip solution"
          },
          {
            "code" : "10535000",
            "display" : "Concentrate for solution for fish treatment"
          },
          {
            "code" : "10536000",
            "display" : "Powder for suspension for fish treatment"
          },
          {
            "code" : "10537000",
            "display" : "Pour-on solution"
          },
          {
            "code" : "10538000",
            "display" : "Pour-on suspension"
          },
          {
            "code" : "10539000",
            "display" : "Pour-on emulsion"
          },
          {
            "code" : "10539250",
            "display" : "Scalp solution"
          },
          {
            "code" : "10539500",
            "display" : "Scrub"
          },
          {
            "code" : "10540000",
            "display" : "Spot-on solution"
          },
          {
            "code" : "10541000",
            "display" : "Spot-on suspension"
          },
          {
            "code" : "10542000",
            "display" : "Spot-on emulsion"
          },
          {
            "code" : "10543000",
            "display" : "Teat dip solution"
          },
          {
            "code" : "10544000",
            "display" : "Teat dip suspension"
          },
          {
            "code" : "10545000",
            "display" : "Teat dip emulsion"
          },
          {
            "code" : "10546000",
            "display" : "Teat spray solution"
          },
          {
            "code" : "10546250",
            "display" : "Transdermal gel"
          },
          {
            "code" : "10546400",
            "display" : "Transdermal solution"
          },
          {
            "code" : "10546500",
            "display" : "Transdermal spray, solution"
          },
          {
            "code" : "10547000",
            "display" : "Transdermal system"
          },
          {
            "code" : "10548000",
            "display" : "Solution for skin-prick test"
          },
          {
            "code" : "10549000",
            "display" : "Solution for skin-scratch test"
          },
          {
            "code" : "10550000",
            "display" : "Plaster for provocation test"
          },
          {
            "code" : "10600500",
            "display" : "Concentrate for solution for intraocular irrigation"
          },
          {
            "code" : "10601000",
            "display" : "Eye cream"
          },
          {
            "code" : "10602000",
            "display" : "Eye gel"
          },
          {
            "code" : "10603000",
            "display" : "Eye ointment"
          },
          {
            "code" : "10604000",
            "display" : "Eye drops, solution"
          },
          {
            "code" : "10604500",
            "display" : "Eye drops, emulsion"
          },
          {
            "code" : "10605000",
            "display" : "Eye drops, suspension"
          },
          {
            "code" : "10608000",
            "display" : "Eye drops, solvent for reconstitution"
          },
          {
            "code" : "10609000",
            "display" : "Eye drops, prolonged-release"
          },
          {
            "code" : "10610000",
            "display" : "Eye lotion"
          },
          {
            "code" : "10611000",
            "display" : "Eye lotion, solvent for reconstitution"
          },
          {
            "code" : "10612000",
            "display" : "Ophthalmic insert"
          },
          {
            "code" : "10613000",
            "display" : "Ophthalmic strip"
          },
          {
            "code" : "10701000",
            "display" : "Ear cream"
          },
          {
            "code" : "10702000",
            "display" : "Ear gel"
          },
          {
            "code" : "10703000",
            "display" : "Ear ointment"
          },
          {
            "code" : "10704000",
            "display" : "Ear drops, solution"
          },
          {
            "code" : "10705000",
            "display" : "Ear drops, suspension"
          },
          {
            "code" : "10706000",
            "display" : "Ear drops, emulsion"
          },
          {
            "code" : "10708000",
            "display" : "Ear powder"
          },
          {
            "code" : "10709000",
            "display" : "Ear spray, solution"
          },
          {
            "code" : "10710000",
            "display" : "Ear spray, suspension"
          },
          {
            "code" : "10711000",
            "display" : "Ear spray, emulsion"
          },
          {
            "code" : "10712000",
            "display" : "Ear wash, solution"
          },
          {
            "code" : "10713000",
            "display" : "Ear wash, emulsion"
          },
          {
            "code" : "10714000",
            "display" : "Ear tampon"
          },
          {
            "code" : "10715000",
            "display" : "Ear stick"
          },
          {
            "code" : "10801000",
            "display" : "Nasal cream"
          },
          {
            "code" : "10802000",
            "display" : "Nasal gel"
          },
          {
            "code" : "10803000",
            "display" : "Nasal ointment"
          },
          {
            "code" : "10804000",
            "display" : "Nasal drops, solution"
          },
          {
            "code" : "10805000",
            "display" : "Nasal drops, suspension"
          },
          {
            "code" : "10806000",
            "display" : "Nasal drops, emulsion"
          },
          {
            "code" : "10807000",
            "display" : "Nasal powder"
          },
          {
            "code" : "10808000",
            "display" : "Nasal spray, solution"
          },
          {
            "code" : "10809000",
            "display" : "Nasal spray, suspension"
          },
          {
            "code" : "10810000",
            "display" : "Nasal spray, emulsion"
          },
          {
            "code" : "10811000",
            "display" : "Nasal wash"
          },
          {
            "code" : "10812000",
            "display" : "Nasal stick"
          },
          {
            "code" : "10900500",
            "display" : "Intravaginal ring"
          },
          {
            "code" : "10901000",
            "display" : "Vaginal cream"
          },
          {
            "code" : "10902000",
            "display" : "Vaginal gel"
          },
          {
            "code" : "10903000",
            "display" : "Vaginal ointment"
          },
          {
            "code" : "10904000",
            "display" : "Vaginal foam"
          },
          {
            "code" : "10905000",
            "display" : "Vaginal solution"
          },
          {
            "code" : "10906000",
            "display" : "Vaginal suspension"
          },
          {
            "code" : "10907000",
            "display" : "Vaginal emulsion"
          },
          {
            "code" : "10908000",
            "display" : "Tablet for vaginal solution"
          },
          {
            "code" : "10909000",
            "display" : "Pessary"
          },
          {
            "code" : "10910000",
            "display" : "Vaginal capsule, hard"
          },
          {
            "code" : "10911000",
            "display" : "Vaginal capsule, soft"
          },
          {
            "code" : "10912000",
            "display" : "Vaginal tablet"
          },
          {
            "code" : "10913000",
            "display" : "Effervescent vaginal tablet"
          },
          {
            "code" : "10914000",
            "display" : "Medicated vaginal tampon"
          },
          {
            "code" : "10915000",
            "display" : "Vaginal delivery system"
          },
          {
            "code" : "10916000",
            "display" : "Vaginal sponge"
          },
          {
            "code" : "11001000",
            "display" : "Rectal cream"
          },
          {
            "code" : "11002000",
            "display" : "Rectal gel"
          },
          {
            "code" : "11003000",
            "display" : "Rectal ointment"
          },
          {
            "code" : "11004000",
            "display" : "Rectal foam"
          },
          {
            "code" : "11005000",
            "display" : "Rectal solution"
          },
          {
            "code" : "11006000",
            "display" : "Rectal suspension"
          },
          {
            "code" : "11007000",
            "display" : "Rectal emulsion"
          },
          {
            "code" : "11008000",
            "display" : "Concentrate for rectal solution"
          },
          {
            "code" : "11009000",
            "display" : "Powder for rectal solution"
          },
          {
            "code" : "11010000",
            "display" : "Powder for rectal suspension"
          },
          {
            "code" : "11011000",
            "display" : "Tablet for rectal solution"
          },
          {
            "code" : "11012000",
            "display" : "Tablet for rectal suspension"
          },
          {
            "code" : "11013000",
            "display" : "Suppository"
          },
          {
            "code" : "11014000",
            "display" : "Rectal capsule"
          },
          {
            "code" : "11015000",
            "display" : "Rectal tampon"
          },
          {
            "code" : "11100500",
            "display" : "Aerosol"
          },
          {
            "code" : "11101000",
            "display" : "Nebuliser solution"
          },
          {
            "code" : "11102000",
            "display" : "Nebuliser suspension"
          },
          {
            "code" : "11103000",
            "display" : "Powder for nebuliser suspension"
          },
          {
            "code" : "11104000",
            "display" : "Powder for nebuliser solution"
          },
          {
            "code" : "11105000",
            "display" : "Nebuliser emulsion"
          },
          {
            "code" : "11106000",
            "display" : "Pressurised inhalation, solution"
          },
          {
            "code" : "11107000",
            "display" : "Pressurised inhalation, suspension"
          },
          {
            "code" : "11108000",
            "display" : "Pressurised inhalation, emulsion"
          },
          {
            "code" : "11109000",
            "display" : "Inhalation powder"
          },
          {
            "code" : "11110000",
            "display" : "Inhalation powder, hard capsule"
          },
          {
            "code" : "11111000",
            "display" : "Inhalation powder, pre-dispensed"
          },
          {
            "code" : "11112000",
            "display" : "Inhalation vapour, powder"
          },
          {
            "code" : "11113000",
            "display" : "Inhalation vapour, capsule"
          },
          {
            "code" : "11114000",
            "display" : "Inhalation vapour, solution"
          },
          {
            "code" : "11115000",
            "display" : "Inhalation vapour, tablet"
          },
          {
            "code" : "11116000",
            "display" : "Inhalation vapour, ointment"
          },
          {
            "code" : "11117000",
            "display" : "Inhalation vapour, liquid"
          },
          {
            "code" : "11118000",
            "display" : "Inhalation gas"
          },
          {
            "code" : "11201000",
            "display" : "Solution for injection"
          },
          {
            "code" : "11202000",
            "display" : "Suspension for injection"
          },
          {
            "code" : "11203000",
            "display" : "Emulsion for injection"
          },
          {
            "code" : "11204000",
            "display" : "Gel for injection"
          },
          {
            "code" : "11205000",
            "display" : "Powder for solution for injection"
          },
          {
            "code" : "11206000",
            "display" : "Powder for suspension for injection"
          },
          {
            "code" : "11208400",
            "display" : "Powder for prolonged-release suspension for injection"
          },
          {
            "code" : "11208500",
            "display" : "Prolonged-release suspension for injection"
          },
          {
            "code" : "11209000",
            "display" : "Concentrate for solution for injection"
          },
          {
            "code" : "11209500",
            "display" : "Solution for cardioplegia"
          },
          {
            "code" : "11210000",
            "display" : "Solution for infusion"
          },
          {
            "code" : "11211000",
            "display" : "Emulsion for infusion"
          },
          {
            "code" : "11211500",
            "display" : "Powder for dispersion for infusion"
          },
          {
            "code" : "11212000",
            "display" : "Powder for solution for infusion"
          },
          {
            "code" : "11213000",
            "display" : "Concentrate for solution for infusion"
          },
          {
            "code" : "11215000",
            "display" : "Lyophilisate for solution for infusion"
          },
          {
            "code" : "11216000",
            "display" : "Solvent for parenteral use"
          },
          {
            "code" : "11217000",
            "display" : "Lyophilisate for solution for injection"
          },
          {
            "code" : "11218000",
            "display" : "Lyophilisate for suspension for injection"
          },
          {
            "code" : "11301000",
            "display" : "Implant"
          },
          {
            "code" : "11302000",
            "display" : "Implantation tablet"
          },
          {
            "code" : "11303000",
            "display" : "Implantation chain"
          },
          {
            "code" : "11303300",
            "display" : "Implantation matrix"
          },
          {
            "code" : "11303500",
            "display" : "Implantation suspension"
          },
          {
            "code" : "11303750",
            "display" : "Kit for implant"
          },
          {
            "code" : "11401000",
            "display" : "Solution for peritoneal dialysis"
          },
          {
            "code" : "11402000",
            "display" : "Solution for haemofiltration"
          },
          {
            "code" : "11403000",
            "display" : "Solution for haemodiafiltration"
          },
          {
            "code" : "11404000",
            "display" : "Solution for haemodialysis"
          },
          {
            "code" : "11405000",
            "display" : "Concentrate for solution for haemodialysis"
          },
          {
            "code" : "11501000",
            "display" : "Solution for intravesical use"
          },
          {
            "code" : "11502000",
            "display" : "Bladder irrigation"
          },
          {
            "code" : "11502500",
            "display" : "Intravesical solution"
          },
          {
            "code" : "11503000",
            "display" : "Powder for bladder irrigation"
          },
          {
            "code" : "11504000",
            "display" : "Urethral gel"
          },
          {
            "code" : "11505000",
            "display" : "Urethral stick"
          },
          {
            "code" : "11601000",
            "display" : "Endotracheopulmonary instillation, solution"
          },
          {
            "code" : "11602000",
            "display" : "Endotracheopulmonary instillation, powder for solution"
          },
          {
            "code" : "11603000",
            "display" : "Endotracheopulmonary instillation, suspension"
          },
          {
            "code" : "11701000",
            "display" : "Endocervical gel"
          },
          {
            "code" : "11801000",
            "display" : "Intramammary solution"
          },
          {
            "code" : "11802000",
            "display" : "Intramammary suspension"
          },
          {
            "code" : "11803000",
            "display" : "Intramammary emulsion"
          },
          {
            "code" : "11804000",
            "display" : "Intramammary ointment"
          },
          {
            "code" : "11805000",
            "display" : "Teat stick"
          },
          {
            "code" : "11901000",
            "display" : "Intrauterine delivery system"
          },
          {
            "code" : "11902000",
            "display" : "Intrauterine solution"
          },
          {
            "code" : "11903000",
            "display" : "Intrauterine suspension"
          },
          {
            "code" : "11904000",
            "display" : "Intrauterine emulsion"
          },
          {
            "code" : "11905000",
            "display" : "Intrauterine tablet"
          },
          {
            "code" : "11906000",
            "display" : "Intrauterine capsule"
          },
          {
            "code" : "12001000",
            "display" : "Bee-hive strip"
          },
          {
            "code" : "12001500",
            "display" : "Bee-hive gel"
          },
          {
            "code" : "12002000",
            "display" : "Bee smoke paper"
          },
          {
            "code" : "12003000",
            "display" : "Bee smoke stick"
          },
          {
            "code" : "12004000",
            "display" : "Nebulisation solution"
          },
          {
            "code" : "12100500",
            "display" : "Absorbable coated sponge"
          },
          {
            "code" : "12101000",
            "display" : "Denture lacquer"
          },
          {
            "code" : "12102000",
            "display" : "Anticoagulant and preservative solution for blood"
          },
          {
            "code" : "12103000",
            "display" : "Solution for blood fraction modification"
          },
          {
            "code" : "12104000",
            "display" : "Wound stick"
          },
          {
            "code" : "12105000",
            "display" : "Radiopharmaceutical precursor"
          },
          {
            "code" : "12106000",
            "display" : "Radionuclide generator"
          },
          {
            "code" : "12107000",
            "display" : "Kit for radiopharmaceutical preparation"
          },
          {
            "code" : "12108000",
            "display" : "Gastroenteral solution"
          },
          {
            "code" : "12109000",
            "display" : "Dispersion"
          },
          {
            "code" : "12109900",
            "display" : "Frozen solution for sealant"
          },
          {
            "code" : "12110000",
            "display" : "Gastroenteral suspension"
          },
          {
            "code" : "12111000",
            "display" : "Gastroenteral emulsion"
          },
          {
            "code" : "12111500",
            "display" : "Intraperitoneal solution"
          },
          {
            "code" : "12112000",
            "display" : "Solution for organ preservation"
          },
          {
            "code" : "12113000",
            "display" : "Irrigation solution"
          },
          {
            "code" : "12114000",
            "display" : "Stomach irrigation"
          },
          {
            "code" : "12115000",
            "display" : "Sealant"
          },
          {
            "code" : "12115100",
            "display" : "Sealant matrix"
          },
          {
            "code" : "12115200",
            "display" : "Sealant powder"
          },
          {
            "code" : "12115500",
            "display" : "Solution for perfusion of organs"
          },
          {
            "code" : "12117000",
            "display" : "Impregnated pad"
          },
          {
            "code" : "12117500",
            "display" : "Impregnated plug"
          },
          {
            "code" : "12118000",
            "display" : "Living tissue equivalent"
          },
          {
            "code" : "12118500",
            "display" : "Lyophilisate for oculonasal suspension"
          },
          {
            "code" : "12119000",
            "display" : "Medicated sponge"
          },
          {
            "code" : "12120000",
            "display" : "Intestinal gel"
          },
          {
            "code" : "12130000",
            "display" : "Medicated thread"
          },
          {
            "code" : "12131000",
            "display" : "Solution for provocation test"
          },
          {
            "code" : "12301000",
            "display" : "Medicinal gas, compressed"
          },
          {
            "code" : "12302000",
            "display" : "Medicinal gas, cryogenic"
          },
          {
            "code" : "12303000",
            "display" : "Medicinal gas, liquefied"
          },
          {
            "code" : "13001000",
            "display" : "Concentrate for concentrate for solution for infusion"
          },
          {
            "code" : "13002000",
            "display" : "Concentrate for nebuliser solution"
          },
          {
            "code" : "13003000",
            "display" : "Concentrate for oromucosal solution"
          },
          {
            "code" : "13004000",
            "display" : "Concentrate for suspension for injection"
          },
          {
            "code" : "13005000",
            "display" : "Dispersion for concentrate for dispersion for infusion"
          },
          {
            "code" : "13006000",
            "display" : "Ear drops, powder for suspension"
          },
          {
            "code" : "13007000",
            "display" : "Effervescent granules for oral suspension"
          },
          {
            "code" : "13008000",
            "display" : "Emulsion for emulsion for injection"
          },
          {
            "code" : "13009000",
            "display" : "Endotracheopulmonary instillation, powder for suspension"
          },
          {
            "code" : "13010000",
            "display" : "Eye drops, powder for solution"
          },
          {
            "code" : "13011000",
            "display" : "Eye drops, powder for suspension"
          },
          {
            "code" : "13012000",
            "display" : "Gas for dispersion for infusion"
          },
          {
            "code" : "13013000",
            "display" : "Gas for dispersion for injection"
          },
          {
            "code" : "13014000",
            "display" : "Gel for gel"
          },
          {
            "code" : "13015000",
            "display" : "Granules for rectal suspension"
          },
          {
            "code" : "13016000",
            "display" : "Laryngopharyngeal solution"
          },
          {
            "code" : "13017000",
            "display" : "Laryngopharyngeal spray, solution"
          },
          {
            "code" : "13018000",
            "display" : "Matrix for implantation matrix"
          },
          {
            "code" : "13019000",
            "display" : "Nasal drops, lyophilisate for suspension"
          },
          {
            "code" : "13020000",
            "display" : "Nasal drops, powder for solution"
          },
          {
            "code" : "13021000",
            "display" : "Powder for gel"
          },
          {
            "code" : "13022000",
            "display" : "Powder for dental gel"
          },
          {
            "code" : "13023000",
            "display" : "Powder for dispersion for injection"
          },
          {
            "code" : "13024000",
            "display" : "Powder for endocervical gel"
          },
          {
            "code" : "13025000",
            "display" : "Powder for endosinusial solution"
          },
          {
            "code" : "13026000",
            "display" : "Powder for gingival gel"
          },
          {
            "code" : "13027000",
            "display" : "Powder for implantation matrix"
          },
          {
            "code" : "13028000",
            "display" : "Powder for implantation paste"
          },
          {
            "code" : "13029000",
            "display" : "Powder for intraocular instillation solution"
          },
          {
            "code" : "13031000",
            "display" : "Powder for sealant"
          },
          {
            "code" : "13032000",
            "display" : "Powder for solution for skin-prick test"
          },
          {
            "code" : "13033000",
            "display" : "Solution for solution for injection"
          },
          {
            "code" : "13034000",
            "display" : "Solution for spray"
          },
          {
            "code" : "13035000",
            "display" : "Solvent for..."
          },
          {
            "code" : "13036000",
            "display" : "Suspension for emulsion for injection"
          },
          {
            "code" : "13037000",
            "display" : "Suspension for oral suspension"
          },
          {
            "code" : "13038000",
            "display" : "Suspension for spray"
          },
          {
            "code" : "13039000",
            "display" : "Suspension for suspension for injection"
          },
          {
            "code" : "13040000",
            "display" : "Powder for emulsion for injection"
          },
          {
            "code" : "13041000",
            "display" : "Endosinusial solution"
          },
          {
            "code" : "13042000",
            "display" : "Epilesional solution"
          },
          {
            "code" : "13043000",
            "display" : "Implantation paste"
          },
          {
            "code" : "13044000",
            "display" : "Intraocular instillation solution"
          },
          {
            "code" : "13045000",
            "display" : "Intravesical suspension"
          },
          {
            "code" : "13046000",
            "display" : "Coated granules"
          },
          {
            "code" : "13047000",
            "display" : "Solution for suspension for injection"
          },
          {
            "code" : "13048000",
            "display" : "Granules for suspension for injection"
          },
          {
            "code" : "13049000",
            "display" : "Dispersion for injection/infusion"
          },
          {
            "code" : "13050000",
            "display" : "Gas for dispersion for injection/infusion"
          },
          {
            "code" : "13051000",
            "display" : "Solution for injection/skin-prick test"
          },
          {
            "code" : "13052000",
            "display" : "Powder for solution for injection/skin-prick test"
          },
          {
            "code" : "13054000",
            "display" : "Solution for bee-hive strip"
          },
          {
            "code" : "13055000",
            "display" : "Solution for use in drinking water/milk"
          },
          {
            "code" : "13056000",
            "display" : "Powder for solution for fish treatment"
          },
          {
            "code" : "13058000",
            "display" : "Caplet"
          },
          {
            "code" : "13061000",
            "display" : "Solution for solution for infusion"
          },
          {
            "code" : "13065000",
            "display" : "Intramammary gel"
          },
          {
            "code" : "13066000",
            "display" : "Tablet for cutaneous solution"
          },
          {
            "code" : "13067000",
            "display" : "Lyophilisate for oral suspension"
          },
          {
            "code" : "13076000",
            "display" : "Prolonged-release solution for injection"
          },
          {
            "code" : "13077000",
            "display" : "Urethral emulsion"
          },
          {
            "code" : "13078000",
            "display" : "Bee-hive solution"
          },
          {
            "code" : "13079000",
            "display" : "Powder for bee-hive solution"
          },
          {
            "code" : "13080000",
            "display" : "Solution for bee-hive solution"
          },
          {
            "code" : "13082000",
            "display" : "Bee-hive dispersion"
          },
          {
            "code" : "13084000",
            "display" : "Oral spray, suspension"
          },
          {
            "code" : "13085000",
            "display" : "Concentrate for concentrate for oral spray, suspension"
          },
          {
            "code" : "13087000",
            "display" : "Oculonasal suspension"
          },
          {
            "code" : "13089000",
            "display" : "Lyophilisate for oral spray, suspension"
          },
          {
            "code" : "13091000",
            "display" : "Emulsion for suspension for injection"
          },
          {
            "code" : "13096000",
            "display" : "Nasal spray, lyophilisate for suspension"
          },
          {
            "code" : "13098000",
            "display" : "Lyophilisate for oculonasal suspension/use in drinking water"
          },
          {
            "code" : "13099000",
            "display" : "Powder for bee-hive dispersion"
          },
          {
            "code" : "13100000",
            "display" : "Solution for bee-hive dispersion"
          },
          {
            "code" : "13102000",
            "display" : "Transdermal ointment"
          },
          {
            "code" : "13105000",
            "display" : "Sublingual powder"
          },
          {
            "code" : "13106000",
            "display" : "Oral herbal material"
          },
          {
            "code" : "13107000",
            "display" : "Solution for cardioplegia/organ preservation"
          },
          {
            "code" : "13111000",
            "display" : "Powder for vaginal solution"
          },
          {
            "code" : "13113000",
            "display" : "Intrauterine gel"
          },
          {
            "code" : "13115000",
            "display" : "Medicinal leech"
          },
          {
            "code" : "13116000",
            "display" : "Lyophilisate for emulsion for injection"
          },
          {
            "code" : "13118000",
            "display" : "Tablet with sensor"
          },
          {
            "code" : "13123000",
            "display" : "Urethral ointment"
          },
          {
            "code" : "13124000",
            "display" : "Medicinal larvae"
          },
          {
            "code" : "13126000",
            "display" : "Prolonged-release dispersion for injection"
          },
          {
            "code" : "13127000",
            "display" : "Sublingual lyophilisate"
          },
          {
            "code" : "13128000",
            "display" : "Prolonged-release wound solution"
          },
          {
            "code" : "13129000",
            "display" : "Nebuliser dispersion"
          },
          {
            "code" : "13133000",
            "display" : "Gastro-resistant oral suspension"
          },
          {
            "code" : "13134000",
            "display" : "Prolonged-release oral suspension"
          },
          {
            "code" : "13135000",
            "display" : "Modified-release oral suspension"
          },
          {
            "code" : "13136000",
            "display" : "Gastro-resistant powder for oral suspension"
          },
          {
            "code" : "13139000",
            "display" : "Concentrate for dispersion for injection"
          },
          {
            "code" : "13140000",
            "display" : "Cutaneous/oromucosal solution"
          },
          {
            "code" : "13141000",
            "display" : "Oromucosal pouch"
          },
          {
            "code" : "13145000",
            "display" : "Impregnated cutaneous swab"
          },
          {
            "code" : "13148000",
            "display" : "Prolonged-release pessary"
          },
          {
            "code" : "13149000",
            "display" : "Oromucosal film"
          },
          {
            "code" : "13152000",
            "display" : "Concentrate for emulsion for injection"
          },
          {
            "code" : "13154000",
            "display" : "Film-coated granules"
          },
          {
            "code" : "13158000",
            "display" : "Effervescent tablet for oculonasal suspension"
          },
          {
            "code" : "13159000",
            "display" : "Eye drops, prolonged-release solution"
          },
          {
            "code" : "13162000",
            "display" : "Concentrate for cutaneous emulsion"
          },
          {
            "code" : "13163000",
            "display" : "Granules for use in drinking water/milk"
          },
          {
            "code" : "30047500",
            "display" : "Pouch"
          },
          {
            "code" : "50001000",
            "display" : "Chewable/dispersible tablet"
          },
          {
            "code" : "50009000",
            "display" : "Concentrate for cutaneous spray, emulsion"
          },
          {
            "code" : "50009300",
            "display" : "Concentrate for dispersion for infusion"
          },
          {
            "code" : "50009500",
            "display" : "Concentrate for emulsion for infusion"
          },
          {
            "code" : "50009750",
            "display" : "Concentrate for intravesical solution"
          },
          {
            "code" : "50010000",
            "display" : "Concentrate for oral solution"
          },
          {
            "code" : "50011000",
            "display" : "Concentrate for oral/rectal solution"
          },
          {
            "code" : "50012000",
            "display" : "Concentrate for peritoneal dialysis solution"
          },
          {
            "code" : "50013000",
            "display" : "Concentrate for solution for intravesical use"
          },
          {
            "code" : "50013250",
            "display" : "Concentrate for solution for peritoneal dialysis"
          },
          {
            "code" : "50013500",
            "display" : "Concentrate for spray emulsion"
          },
          {
            "code" : "50014000",
            "display" : "Concentrate for suspension for infusion"
          },
          {
            "code" : "50015000",
            "display" : "Cutaneous and nasal ointment"
          },
          {
            "code" : "50015100",
            "display" : "Cutaneous/ear drops suspension"
          },
          {
            "code" : "50015200",
            "display" : "Cutaneous/nasal ointment"
          },
          {
            "code" : "50015300",
            "display" : "Cutaneous/oromucosal/oral solution"
          },
          {
            "code" : "50015400",
            "display" : "Cutaneous/oromucosal spray"
          },
          {
            "code" : "50015450",
            "display" : "Cutaneous solution/concentrate for oromucosal solution"
          },
          {
            "code" : "50015500",
            "display" : "Cutaneous spray, emulsion"
          },
          {
            "code" : "50016000",
            "display" : "Cutaneous spray, ointment"
          },
          {
            "code" : "50017000",
            "display" : "Dental paste"
          },
          {
            "code" : "50017500",
            "display" : "Dispersion for infusion"
          },
          {
            "code" : "50018000",
            "display" : "Ear/eye drops, solution"
          },
          {
            "code" : "50018500",
            "display" : "Ear/eye drops, suspension"
          },
          {
            "code" : "50019000",
            "display" : "Ear/eye ointment"
          },
          {
            "code" : "50019500",
            "display" : "Ear/eye/nasal drops, solution"
          },
          {
            "code" : "50020000",
            "display" : "Ear/eye/nose drops, solution"
          },
          {
            "code" : "50020200",
            "display" : "Ear/nasal drops, suspension"
          },
          {
            "code" : "50020500",
            "display" : "Effervescent buccal tablet"
          },
          {
            "code" : "50021000",
            "display" : "Emulsion for injection/infusion"
          },
          {
            "code" : "50022000",
            "display" : "Endosinusial wash, suspension"
          },
          {
            "code" : "50023500",
            "display" : "Film coated gastro-resistant tablet"
          },
          {
            "code" : "50024000",
            "display" : "Gargle/mouthwash"
          },
          {
            "code" : "50024500",
            "display" : "Gargle/nasal wash"
          },
          {
            "code" : "50025000",
            "display" : "Gastro-resistant coated tablet"
          },
          {
            "code" : "50026000",
            "display" : "Gastro-resistant granules for oral suspension"
          },
          {
            "code" : "50026250",
            "display" : "Gastro-resistant prolonged-release tablet"
          },
          {
            "code" : "50028000",
            "display" : "Granules for oral and rectal suspension"
          },
          {
            "code" : "50029000",
            "display" : "Granules for oral drops, solution"
          },
          {
            "code" : "50029150",
            "display" : "Granules for oral/rectal suspension"
          },
          {
            "code" : "50029250",
            "display" : "Granules for use in drinking water"
          },
          {
            "code" : "50029500",
            "display" : "Granules for vaginal solution"
          },
          {
            "code" : "50029600",
            "display" : "Hard capsule with gastro-resistant pellets"
          },
          {
            "code" : "50029800",
            "display" : "Inhalation impregnated pad"
          },
          {
            "code" : "50030000",
            "display" : "Inhalation powder, tablet"
          },
          {
            "code" : "50031000",
            "display" : "Inhalation vapour, effervescent tablet"
          },
          {
            "code" : "50032000",
            "display" : "Inhalation vapour, emulsion"
          },
          {
            "code" : "50033000",
            "display" : "Inhalation vapour, impregnated pad"
          },
          {
            "code" : "50033100",
            "display" : "Inhalation vapour, impregnated plug"
          },
          {
            "code" : "50033300",
            "display" : "Intrauterine foam"
          },
          {
            "code" : "50033400",
            "display" : "Intravesical solution/solution for injection"
          },
          {
            "code" : "50034000",
            "display" : "Liquefied gas for dental use"
          },
          {
            "code" : "50034700",
            "display" : "Lyophilisate for use in drinking water"
          },
          {
            "code" : "50035000",
            "display" : "Modified-release film-coated tablet"
          },
          {
            "code" : "50036000",
            "display" : "Modified-release granules for oral suspension"
          },
          {
            "code" : "50036050",
            "display" : "Mouthwash, powder for solution"
          },
          {
            "code" : "50036100",
            "display" : "Muco-adhesive buccal prolonged-release tablet"
          },
          {
            "code" : "50036500",
            "display" : "Nasal/oromucosal solution"
          },
          {
            "code" : "50036700",
            "display" : "Nasal/oromucosal spray, solution"
          },
          {
            "code" : "50037000",
            "display" : "Nasal spray and oromucosal solution"
          },
          {
            "code" : "50037100",
            "display" : "Nasal spray, powder for solution"
          },
          {
            "code" : "50037400",
            "display" : "Nasal spray, solution/oromucosal solution"
          },
          {
            "code" : "50037500",
            "display" : "Oral drops, granules for solution"
          },
          {
            "code" : "50037750",
            "display" : "Oral drops, liquid"
          },
          {
            "code" : "50037900",
            "display" : "Oral/rectal solution"
          },
          {
            "code" : "50038000",
            "display" : "Oral/rectal suspension"
          },
          {
            "code" : "50038500",
            "display" : "Oral solution/concentrate for nebuliser solution"
          },
          {
            "code" : "50039000",
            "display" : "Oromucosal patch"
          },
          {
            "code" : "50039500",
            "display" : "Oromucosal/laryngopharyngeal solution"
          },
          {
            "code" : "50040000",
            "display" : "Oromucosal/laryngopharyngeal solution/spray"
          },
          {
            "code" : "50040500",
            "display" : "Oromucosal/laryngopharyngeal solution/spray, solution"
          },
          {
            "code" : "50043000",
            "display" : "Powder for concentrate for solution for infusion"
          },
          {
            "code" : "50048750",
            "display" : "Powder for concentrate for dispersion for infusion"
          },
          {
            "code" : "50049000",
            "display" : "Powder for concentrate for haemodialysis solution"
          },
          {
            "code" : "50049100",
            "display" : "Powder for concentrate for intravesical suspension"
          },
          {
            "code" : "50049200",
            "display" : "Powder for concentrate for solution for haemodialysis"
          },
          {
            "code" : "50049250",
            "display" : "Powder for concentrate for solution for injection/infusion"
          },
          {
            "code" : "50049270",
            "display" : "Powder for dental solution"
          },
          {
            "code" : "50049300",
            "display" : "Powder for epilesional solution"
          },
          {
            "code" : "50049500",
            "display" : "Powder for implantation suspension"
          },
          {
            "code" : "50050000",
            "display" : "Powder for intravesical solution"
          },
          {
            "code" : "50050500",
            "display" : "Powder for intravesical solution/solution for injection"
          },
          {
            "code" : "50051000",
            "display" : "Powder for intravesical suspension"
          },
          {
            "code" : "50051100",
            "display" : "Powder for mouth wash"
          },
          {
            "code" : "50051500",
            "display" : "Powder for nebuliser solution/solution for injection/infusion"
          },
          {
            "code" : "50052000",
            "display" : "Powder for oral/rectal suspension"
          },
          {
            "code" : "50053000",
            "display" : "Powder for solution for injection or infusion"
          },
          {
            "code" : "50053500",
            "display" : "Powder for solution for injection/infusion"
          },
          {
            "code" : "50054000",
            "display" : "Powder for solution for intravesical use"
          },
          {
            "code" : "50055000",
            "display" : "Powder for solution for nasal spray"
          },
          {
            "code" : "50055150",
            "display" : "Powder for solution/suspension for injection"
          },
          {
            "code" : "50055250",
            "display" : "Powder for use in drinking water/milk"
          },
          {
            "code" : "50055500",
            "display" : "Prolonged-release film-coated tablet"
          },
          {
            "code" : "50056000",
            "display" : "Prolonged-release granules for oral suspension"
          },
          {
            "code" : "50056500",
            "display" : "Radiopharmaceutical precursor, solution"
          },
          {
            "code" : "50057000",
            "display" : "Solution for haemodialysis/haemofiltration"
          },
          {
            "code" : "50058000",
            "display" : "Solution for infusion and oral solution"
          },
          {
            "code" : "50059000",
            "display" : "Solution for injection/concentrate for solution for infusion"
          },
          {
            "code" : "50059500",
            "display" : "Solution for injection for euthanasia"
          },
          {
            "code" : "50060000",
            "display" : "Solution for injection/infusion"
          },
          {
            "code" : "50060700",
            "display" : "Solution for injection/infusion/rectal use"
          },
          {
            "code" : "50061000",
            "display" : "Solution for intraperitoneal use"
          },
          {
            "code" : "50061300",
            "display" : "Solution for use in drinking water"
          },
          {
            "code" : "50061500",
            "display" : "Solution for sealant"
          },
          {
            "code" : "50061600",
            "display" : "Solvent for nasal use"
          },
          {
            "code" : "50063000",
            "display" : "Suspension for infusion"
          },
          {
            "code" : "50063500",
            "display" : "Suspension for use in drinking water"
          },
          {
            "code" : "50066000",
            "display" : "Tablet for oral suspension"
          },
          {
            "code" : "50068000",
            "display" : "Teat dip/spray solution"
          },
          {
            "code" : "50070000",
            "display" : "Oral suspension for use in drinking water"
          },
          {
            "code" : "50072000",
            "display" : "Powder for use in drinking water"
          },
          {
            "code" : "50073000",
            "display" : "Powder for solution for intraocular irrigation"
          },
          {
            "code" : "50073500",
            "display" : "Solution for intraocular irrigation"
          },
          {
            "code" : "50074000",
            "display" : "Solvent for solution for intraocular irrigation"
          },
          {
            "code" : "50076000",
            "display" : "Solvent for solution for infusion"
          },
          {
            "code" : "50077000",
            "display" : "Dispersion for injection"
          },
          {
            "code" : "50079000",
            "display" : "Concentrate for solution for injection/infusion"
          },
          {
            "code" : "50081000",
            "display" : "Inhalation solution"
          },
          {
            "code" : "50082000",
            "display" : "Oral drops, powder for suspension"
          }
        ]
      }
    ]
  }
}

```
