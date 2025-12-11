# EDQM - Combined Term - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Combined Term**

## ValueSet: EDQM - Combined Term 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-term | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EdqmCombinedTermVS |
| *Other Identifiers:*OID:0.4.0.127.0.16.1.1.2.4 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Combined Terms from EDQM used by SMC 

 **References** 

* Included into [ChSMCAuthorisedPharmaceuticalDoseFormVS](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md)

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
  "id" : "edqm-combined-term",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-term",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.4"
    }
  ],
  "version" : "1.0.0",
  "name" : "EdqmCombinedTermVS",
  "title" : "EDQM - Combined Term",
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
  "description" : "Value Set for the Combined Terms from EDQM used by SMC",
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
            "code" : "13083000",
            "display" : "Bee-hive dispersion in sachet"
          },
          {
            "code" : "50001250",
            "display" : "Coated granules in sachet"
          },
          {
            "code" : "13103000",
            "display" : "Cutaneous solution in single-dose container"
          },
          {
            "code" : "13161000",
            "display" : "Dispersion for injection in pre-filled syringe"
          },
          {
            "code" : "50017200",
            "display" : "Ear drops, solution in single-dose container"
          },
          {
            "code" : "50017550",
            "display" : "Ear drops, suspension in single-dose container"
          },
          {
            "code" : "13095000",
            "display" : "Emulsion for infusion in administration system"
          },
          {
            "code" : "50021250",
            "display" : "Emulsion for injection/infusion in pre-filled syringe"
          },
          {
            "code" : "13104000",
            "display" : "Eye drops, emulsion in single-dose container"
          },
          {
            "code" : "50022500",
            "display" : "Eye drops, prolonged-release solution in single-dose container"
          },
          {
            "code" : "50023000",
            "display" : "Eye drops, solution in single-dose container"
          },
          {
            "code" : "50023100",
            "display" : "Eye drops, suspension in single-dose container"
          },
          {
            "code" : "50023300",
            "display" : "Eye gel in single-dose container"
          },
          {
            "code" : "50023400",
            "display" : "Eye ointment in single-dose container"
          },
          {
            "code" : "13155000",
            "display" : "Film-coated granules in single-dose container"
          },
          {
            "code" : "50023700",
            "display" : "Film-coated tablet and gastro-resistant granules in sachet"
          },
          {
            "code" : "50026150",
            "display" : "Gastro-resistant granules for oral suspension in sachet"
          },
          {
            "code" : "50026400",
            "display" : "Gel in pressurised container"
          },
          {
            "code" : "13069000",
            "display" : "Gel in sachet"
          },
          {
            "code" : "50029170",
            "display" : "Granules for oral solution in sachet"
          },
          {
            "code" : "50029200",
            "display" : "Granules for oral suspension in sachet"
          },
          {
            "code" : "50029550",
            "display" : "Granules in sachet"
          },
          {
            "code" : "13090000",
            "display" : "Granules in single-dose container"
          },
          {
            "code" : "50029700",
            "display" : "Herbal tea in bag"
          },
          {
            "code" : "50029750",
            "display" : "Implant in pre-filled syringe"
          },
          {
            "code" : "50033500",
            "display" : "Intravitreal implant in applicator"
          },
          {
            "code" : "50036200",
            "display" : "Nasal drops, solution in single-dose container"
          },
          {
            "code" : "13120000",
            "display" : "Nasal powder in single-dose container"
          },
          {
            "code" : "50037250",
            "display" : "Nasal spray, solution in single-dose container"
          },
          {
            "code" : "50037600",
            "display" : "Oral emulsion in sachet"
          },
          {
            "code" : "50037700",
            "display" : "Oral paste in sachet"
          },
          {
            "code" : "50037800",
            "display" : "Oral powder in sachet"
          },
          {
            "code" : "13130000",
            "display" : "Oral powder in single-dose container"
          },
          {
            "code" : "13146000",
            "display" : "Oral solution in multidose container with metering pump"
          },
          {
            "code" : "50038600",
            "display" : "Oral solution in sachet"
          },
          {
            "code" : "50038650",
            "display" : "Oral solution in single-dose container"
          },
          {
            "code" : "13075000",
            "display" : "Oral suspension in pre-filled oral applicator"
          },
          {
            "code" : "50038700",
            "display" : "Oral suspension in sachet"
          },
          {
            "code" : "50039300",
            "display" : "Oromucosal powder in pouch"
          },
          {
            "code" : "50041000",
            "display" : "Pillules in single-dose container"
          },
          {
            "code" : "50048010",
            "display" : "Powder and solvent for prolonged-release suspension for injection in pre-filled pen"
          },
          {
            "code" : "13057000",
            "display" : "Powder and solvent for prolonged-release suspension for injection in pre-filled syringe"
          },
          {
            "code" : "50048050",
            "display" : "Powder and solvent for solution for injection in cartridge"
          },
          {
            "code" : "50048150",
            "display" : "Powder and solvent for solution for injection in pre-filled pen"
          },
          {
            "code" : "50048250",
            "display" : "Powder and solvent for solution for injection in pre-filled syringe"
          },
          {
            "code" : "13108000",
            "display" : "Powder and solvent for suspension for injection in multidose container"
          },
          {
            "code" : "50048300",
            "display" : "Powder and solvent for suspension for injection in pre-filled syringe"
          },
          {
            "code" : "50052500",
            "display" : "Powder for oral solution in sachet"
          },
          {
            "code" : "13147000",
            "display" : "Powder for oral suspension in sachet"
          },
          {
            "code" : "13060000",
            "display" : "Powder for oral/rectal suspension in sachet"
          },
          {
            "code" : "50056150",
            "display" : "Prolonged-release granules for oral suspension in sachet"
          },
          {
            "code" : "50056200",
            "display" : "Prolonged-release granules in sachet"
          },
          {
            "code" : "13112000",
            "display" : "Prolonged-release suspension for injection in pre-filled pen"
          },
          {
            "code" : "50056250",
            "display" : "Prolonged-release suspension for injection in pre-filled syringe"
          },
          {
            "code" : "50056600",
            "display" : "Solution and suspension for suspension for injection in pre-filled syringe"
          },
          {
            "code" : "11210500",
            "display" : "Solution for infusion in administration system"
          },
          {
            "code" : "13122000",
            "display" : "Solution for infusion in cartridge"
          },
          {
            "code" : "50058500",
            "display" : "Solution for infusion in pre-filled syringe"
          },
          {
            "code" : "13053000",
            "display" : "Solution for injection in administration system"
          },
          {
            "code" : "50060100",
            "display" : "Solution for injection in cartridge"
          },
          {
            "code" : "13071000",
            "display" : "Solution for injection in dose-dispenser cartridge"
          },
          {
            "code" : "13109000",
            "display" : "Solution for injection in multidose container"
          },
          {
            "code" : "50060150",
            "display" : "Solution for injection in needle-free injector"
          },
          {
            "code" : "13068000",
            "display" : "Solution for injection in pre-filled injector"
          },
          {
            "code" : "50060200",
            "display" : "Solution for injection in pre-filled pen"
          },
          {
            "code" : "50060300",
            "display" : "Solution for injection in pre-filled syringe"
          },
          {
            "code" : "50060500",
            "display" : "Solution for injection/infusion in pre-filled syringe"
          },
          {
            "code" : "50063100",
            "display" : "Suspension for injection in cartridge"
          },
          {
            "code" : "13110000",
            "display" : "Suspension for injection in multidose container"
          },
          {
            "code" : "13064000",
            "display" : "Suspension for injection in pre-filled injector"
          },
          {
            "code" : "50063200",
            "display" : "Suspension for injection in pre-filled pen"
          },
          {
            "code" : "50063300",
            "display" : "Suspension for injection in pre-filled syringe"
          },
          {
            "code" : "13094000",
            "display" : "Syrup in sachet"
          },
          {
            "code" : "13137000",
            "display" : "Transdermal gel in sachet"
          }
        ]
      }
    ]
  }
}

```
