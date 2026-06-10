# ConceptMap for mapping Nuva vaccine codes to SNOMED-CT vaccine codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping Nuva vaccine codes to SNOMED-CT vaccine codes**

## ConceptMap: ConceptMap for mapping Nuva vaccine codes to SNOMED-CT vaccine codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-snomedct-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:NuvaToSnomedctConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the SNOMED-CT CodeSystem. It is generated based on the provided CSV mapping file and the SNOMED-CT CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-nuva-to-snomedct-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-snomedct-cm",
  "version" : "3.4.0",
  "name" : "NuvaToSnomedctConceptMap",
  "title" : "ConceptMap for mapping Nuva vaccine codes to SNOMED-CT vaccine codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T10:00:23+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the SNOMED-CT CodeSystem. It is generated based on the provided CSV mapping file and the SNOMED-CT CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-snomedct-vs",
  "group" : [{
    "source" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "target" : "http://snomed.info/sct",
    "element" : [{
      "code" : "VAC0001",
      "display" : "ACT-HIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0002",
      "display" : "AGRIPPAL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0003",
      "display" : "AVAXIM 160 U",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0004",
      "display" : "D.T. POLIO MERIEUX",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0005",
      "display" : "DUKORAL",
      "target" : [{
        "code" : "1362134008",
        "display" : "Inactivated whole Vibrio cholerae and Vibrio cholerae recombinant toxin B subunit antigens only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0006",
      "display" : "FLUVIRINE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0007",
      "display" : "GARDASIL",
      "target" : [{
        "code" : "2001000221108",
        "display" : "Human papillomavirus 6, 11, 16 and 18 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0008",
      "display" : "GRIPGUARD",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0009",
      "display" : "HBVAXPRO 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0010",
      "display" : "HBVAXPRO 40 µg",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0011",
      "display" : "HBVAXPRO 5 µg",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0012",
      "display" : "IMMUGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0013",
      "display" : "IMOVAX POLIO",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0014",
      "display" : "INFANRIX HEXA",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0015",
      "display" : "INFANRIXQUINTA",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0016",
      "display" : "INFLUVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0017",
      "display" : "M-M-RVAXPRO",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0018",
      "display" : "MENCEVAX ACWY",
      "target" : [{
        "code" : "871873006",
        "display" : "Meningitis A, C, W135 and Y vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0019",
      "display" : "MENINGITEC",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0020",
      "display" : "MENJUGATEKIT 10 µg",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0021",
      "display" : "MUTAGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0022",
      "display" : "NEISVAC",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0023",
      "display" : "PENTAVAC",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0024",
      "display" : "PNEUMO 23",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0025",
      "display" : "PREVENAR",
      "target" : [{
        "code" : "1052328007",
        "display" : "Pneumococcal 4, 6B, 9V, 14, 18C, 19F, and 23F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0026",
      "display" : "PREVIGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0027",
      "display" : "R.O.R. VAX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0028",
      "display" : "RABIPUR",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0029",
      "display" : "REPEVAX",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0030",
      "display" : "REVAXIS",
      "target" : [{
        "code" : "871838009",
        "display" : "Low dose diphtheria and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0031",
      "display" : "ROTATEQ",
      "target" : [{
        "code" : "1290764006",
        "display" : "Vaccine product containing only Human-bovine reassortant Rotavirus G1, G2, G3, G4, and P1A[8] antigens",
        "equivalence" : "equal"
      },
      {
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0032",
      "display" : "ROUVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0033",
      "display" : "RUDIVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0034",
      "display" : "SPIROLEPT",
      "target" : [{
        "code" : "840564009",
        "display" : "Leptospira antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0035",
      "display" : "STAMARIL",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0037",
      "display" : "TETRAVAC-ACELLULAIRE",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0038",
      "display" : "TICOVAC 0,5 mL",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0039",
      "display" : "TICOVAC 0,25 mL",
      "target" : [{
        "code" : "1287338003",
        "display" : "Tick-borne encephalitis virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0040",
      "display" : "TYAVAX",
      "target" : [{
        "code" : "871804001",
        "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0041",
      "display" : "TYPHIM VI",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0042",
      "display" : "VACCIN BCG SSI",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0043",
      "display" : "BOOSTRIXTETRA",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0044",
      "display" : "CERVARIX",
      "target" : [{
        "code" : "1991000221106",
        "display" : "Human papillomavirus 16 and 18 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0045",
      "display" : "ENGERIX B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0046",
      "display" : "ENGERIX B 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0047",
      "display" : "FLUARIX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0048",
      "display" : "GENHEVAC B PASTEUR",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0049",
      "display" : "HAVRIX 1440 U/1mL",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0050",
      "display" : "HAVRIX 720 U/0,5 mL",
      "target" : [{
        "code" : "871750007",
        "display" : "Hepatitis A virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0051",
      "display" : "INFANRIXTETRA",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0052",
      "display" : "VACCIN MENINGOCOCCIQUE A+C",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0053",
      "display" : "PRIORIX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0054",
      "display" : "VACCIN RABIQUE PASTEUR",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0056",
      "display" : "VACCIN TETANIQUE PASTEUR",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0057",
      "display" : "TWINRIX 20 µg",
      "target" : [{
        "code" : "121000221105",
        "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871803007",
        "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0058",
      "display" : "TWINRIX 10 µg",
      "target" : [{
        "code" : "1296753004",
        "display" : "Paediatric vaccine inactivated whole Hepatitis A and Hepatitis B surface antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "121000221105",
        "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871803007",
        "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0059",
      "display" : "TYPHERIX",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0060",
      "display" : "VARILRIX",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0061",
      "display" : "VARIVAX",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0062",
      "display" : "VAXIGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0063",
      "display" : "TETRACOQ",
      "target" : [{
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0064",
      "display" : "PENTACOQ",
      "target" : [{
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0066",
      "display" : "DTCP PASTEUR",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0067",
      "display" : "HAVRIX 360 U",
      "target" : [{
        "code" : "871750007",
        "display" : "Hepatitis A virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0068",
      "display" : "MONOVAX",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0069",
      "display" : "MENOMUNE",
      "target" : [{
        "code" : "871873006",
        "display" : "Meningitis A, C, W135 and Y vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0070",
      "display" : "DT BIS",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0072",
      "display" : "JE-VAX",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0073",
      "display" : "IXIARO",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0074",
      "display" : "D.T. COQ MERIEUX",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0076",
      "display" : "DTVax",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0077",
      "display" : "IMOVAX OREILLONS",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0078",
      "display" : "RUDI-ROUVAX",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0079",
      "display" : "ENCEPUR",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0080",
      "display" : "BCG PASTEUR",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0082",
      "display" : "MENBVAC",
      "target" : [{
        "code" : "1981000221108",
        "display" : "Meningococcus serogroup B vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0083",
      "display" : "SYNFLORIX",
      "target" : [{
        "code" : "1052330009",
        "display" : "Pneumococcal 10-valent conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0085",
      "display" : "T POLIO MERIEUX",
      "target" : [{
        "code" : "871816007",
        "display" : "Poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0086",
      "display" : "TETAVAX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0087",
      "display" : "VAXICOQ",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0091",
      "display" : "VACCIN CCB PASTEUR",
      "target" : [{
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0092",
      "display" : "VACCIN CHOLERIQUE PASTEUR",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0094",
      "display" : "VACCIN SABIN POLIOVAC MERIEUX",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0095",
      "display" : "VACCIN TAB PASTEUR",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0096",
      "display" : "VACCIN GRIPPAL RONCHESE (VGR)",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0097",
      "display" : "VACCIN LEPTOSPIRES ICTEROHEMORRAGIAE PASTEUR",
      "target" : [{
        "code" : "840564009",
        "display" : "Leptospira antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0098",
      "display" : "HEXAVAC",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0099",
      "display" : "MENINVACT",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0103",
      "display" : "MENACTRA",
      "target" : [{
        "code" : "1971000221105",
        "display" : "Meningococcus A, C, W135 and Y capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871916006",
        "display" : "Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0104",
      "display" : "HUMENZA",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0105",
      "display" : "PANENZA",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0106",
      "display" : "Q-Pan H1N1",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0107",
      "display" : "CELVAPAN",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0108",
      "display" : "PANDEMRIX",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0109",
      "display" : "FOCETRIA (unidose)",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0115",
      "display" : "AVAXIM 80 U PEDIATRIQUE",
      "target" : [{
        "code" : "871750007",
        "display" : "Hepatitis A virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0116",
      "display" : "R.O.R SANOFI PASTEUR",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0120",
      "display" : "VACCIN VARICELLE MERIEUX",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0121",
      "display" : "PRIORIX-TETRA",
      "target" : [{
        "code" : "2251000221101",
        "display" : "Live attenuated measles and mumps and rubella and varicella-zoster vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871908002",
        "display" : "Human alphaherpesvirus 3 and Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0123",
      "display" : "PREVENAR 13",
      "target" : [{
        "code" : "51451000087105",
        "display" : "Pneumococcal 13-valent conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0124",
      "display" : "FOCETRIA (multidose)",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0125",
      "display" : "AREPANRIX",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0126",
      "display" : "HEVAC B",
      "target" : [{
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0127",
      "display" : "HB VAX DNA 5 µg",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0128",
      "display" : "HB VAX DNA 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0129",
      "display" : "HB VAX DNA 40 µg",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0139",
      "display" : "PENT-HIBEST",
      "target" : [{
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0140",
      "display" : "INTANZA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0141",
      "display" : "MENVEO",
      "target" : [{
        "code" : "1971000221105",
        "display" : "Meningococcus A, C, W135 and Y capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871916006",
        "display" : "Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0161",
      "display" : "ZOSTAVAX",
      "target" : [{
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0164",
      "display" : "INTANZA 9 µg",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0165",
      "display" : "VAQTA 25 U/0,5 mL",
      "target" : [{
        "code" : "871750007",
        "display" : "Hepatitis A virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0166",
      "display" : "VAQTA 50 U",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0168",
      "display" : "AMBIRIX",
      "target" : [{
        "code" : "121000221105",
        "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871803007",
        "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0169",
      "display" : "OPTAFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0170",
      "display" : "AFLUNOV",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0171",
      "display" : "PREPANDEMIC INFLUENZA VACCINE (H5N1) NOVARTIS",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0172",
      "display" : "DIFTAVAX",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0173",
      "display" : "FLUENZ",
      "target" : [{
        "code" : "1010313002",
        "display" : "Live attenuated Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0174",
      "display" : "PROQUAD",
      "target" : [{
        "code" : "2251000221101",
        "display" : "Live attenuated measles and mumps and rubella and varicella-zoster vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871908002",
        "display" : "Human alphaherpesvirus 3 and Measles morbillivirus and Mumps orthorubulavirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0175",
      "display" : "A.D.T. BOOSTER",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0176",
      "display" : "A.K.D.S.",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0177",
      "display" : "AC VAX",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0178",
      "display" : "ACEL-IMUNE",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0179",
      "display" : "ACELLULAR D.P.T. KOVAX",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0180",
      "display" : "ACTACEL",
      "target" : [{
        "code" : "318341000221109",
        "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0182",
      "display" : "ADACEL",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0183",
      "display" : "AIMMUGEN",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0184",
      "display" : "ALDIANA",
      "target" : [{
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0185",
      "display" : "ALDITEANA",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0186",
      "display" : "ALDITERPERA",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0187",
      "display" : "AMARIL",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0188",
      "display" : "QUIMI-HIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0189",
      "display" : "ANADIFTERALL",
      "target" : [{
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0190",
      "display" : "ANATETALL",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0191",
      "display" : "ARILVAX",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0192",
      "display" : "ATTENUVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0193",
      "display" : "AVAC-1, AVA",
      "target" : [{
        "code" : "860818003",
        "display" : "Bacillus anthracis antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836384003",
        "display" : "Bacillus anthracis antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0195",
      "display" : "BEGRIVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0198",
      "display" : "BIKEN-HB",
      "target" : [{
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0199",
      "display" : "BIMMUGEN",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0200",
      "display" : "BIOTHRAX",
      "target" : [{
        "code" : "860818003",
        "display" : "Bacillus anthracis antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836384003",
        "display" : "Bacillus anthracis antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0201",
      "display" : "BIVIRATEN BERNA",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0203",
      "display" : "C.D.T.",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0204",
      "display" : "CAM-KOVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0205",
      "display" : "CD.JEVAX",
      "target" : [{
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0206",
      "display" : "CELLUVAX",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0207",
      "display" : "CENDEVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0208",
      "display" : "CERTIVA",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0209",
      "display" : "COMVAX",
      "target" : [{
        "code" : "871806004",
        "display" : "Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0210",
      "display" : "D.S.D.P.T.",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0211",
      "display" : "DAPTACEL",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0212",
      "display" : "DI TE PER POL IMPFSTOFF",
      "target" : [{
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0213",
      "display" : "DI-TE-POL",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0214",
      "display" : "DIF-TET-ALL",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0216",
      "display" : "ANATOXAL DI TE",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0217",
      "display" : "DITOXIM",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0218",
      "display" : "DOUBLE ANIGEN B.",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0219",
      "display" : "DRYVAX",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0220",
      "display" : "DT MERIEUX",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0222",
      "display" : "TRIPVAC",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0223",
      "display" : "DUAL ANTIGEN SII",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0224",
      "display" : "ECOLARIX",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0225",
      "display" : "EIPV",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0226",
      "display" : "Diptheria, Tetanus and Acellular Pertussis Combined Walvax vaccine",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0227",
      "display" : "EPAXAL",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0228",
      "display" : "ERVEVAX RA 27/3",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0229",
      "display" : "FLU SHIELD",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0230",
      "display" : "FLUAD",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0231",
      "display" : "FLUKOVAX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0232",
      "display" : "FLULAVAL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0233",
      "display" : "FLUMIST",
      "target" : [{
        "code" : "1010313002",
        "display" : "Live attenuated Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0234",
      "display" : "FLUOGEN",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0235",
      "display" : "FLUVIRIN",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0236",
      "display" : "FLUZONE HIGH-DOSE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0238",
      "display" : "FUNED-CEME",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0240",
      "display" : "GUNEVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0241",
      "display" : "HAEMOPHILUS INFLUENZAE B CONJUGATE VACCINE - SERUM INSTITUTE OF INDIA",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0242",
      "display" : "HBY",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0243",
      "display" : "HEPA-B INJECTION",
      "target" : [{
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0244",
      "display" : "HEPRECOMB",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0245",
      "display" : "HEPTAVAX B",
      "target" : [{
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0247",
      "display" : "HIBTITER",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0248",
      "display" : "HINKUYS KAROKOE",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0249",
      "display" : "RUBELLA VACCINE HPV-77",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0251",
      "display" : "HUMOTET-ANTI TETANUS",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0252",
      "display" : "VAXIGRIP ENFANTS",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0253",
      "display" : "VAXIRAB N",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0254",
      "display" : "IMOVAX D.T.",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0255",
      "display" : "IMOVAX GRIPPE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0256",
      "display" : "IMOVAX MUMPS",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0257",
      "display" : "IMOVAX PAROTIDITIS",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0258",
      "display" : "IMOVAX R.O.R.",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0259",
      "display" : "IMOVAX Rabies",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0260",
      "display" : "IMOVAX Rabies I.D.",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0261",
      "display" : "IMOVAX RAGE",
      "target" : [{
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0262",
      "display" : "IMOVAX RUBEOLA",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0263",
      "display" : "IMOVAX SARAMPION",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0264",
      "display" : "INFANRIX",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0265",
      "display" : "INFLU-KOVAX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0266",
      "display" : "INFLUENZA HA VACCINE KOVAX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0267",
      "display" : "IPAD TP",
      "target" : [{
        "code" : "871816007",
        "display" : "Poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0268",
      "display" : "IPOL",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0271",
      "display" : "ISTIVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0272",
      "display" : "KAKSOISROKOTE DUBBELVACCIN",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0273",
      "display" : "KIKHOSTE-VAKSINE",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0274",
      "display" : "LANCY VAXINA",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0275",
      "display" : "LAVANTUU TIROKOTE",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0276",
      "display" : "LIOVAX",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0277",
      "display" : "LIRUBEL",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0278",
      "display" : "LIRUGEN",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0280",
      "display" : "MUMPS-MEASLES VACCINE MICROGEN",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0281",
      "display" : "LM - 3 RIT",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0282",
      "display" : "LTEANAS IMUNA",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0283",
      "display" : "LYMERIX",
      "target" : [{
        "code" : "840599008",
        "display" : "Borrelia burgdorferi antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871911001",
        "display" : "Borrelia burgdorferi antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0284",
      "display" : "LYOVAC ATTENUVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0285",
      "display" : "LYOVAC MERUVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0286",
      "display" : "M-M-R II",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0287",
      "display" : "M-R VAX",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0288",
      "display" : "M-R VAX II",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0289",
      "display" : "M-VAX PFIZER",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0290",
      "display" : "MASERN-IMPFSTOFF SSW",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0291",
      "display" : "MEASLES VACCINE AIK-C STRAIN POLYVAC",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0292",
      "display" : "MEASLES VACCINE DK3",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0293",
      "display" : "MENAFRIVAC",
      "target" : [{
        "code" : "52821000087108",
        "display" : "Neisseria meningitidis serogroup A capsular polysaccharide conjugated antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1252690003",
        "display" : "Meningococcus serogroup A vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0294",
      "display" : "MENCEVAX A",
      "target" : [{
        "code" : "1252690003",
        "display" : "Meningococcus serogroup A vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0295",
      "display" : "MENOMUNE-A/C/Y/W-135",
      "target" : [{
        "code" : "871873006",
        "display" : "Meningitis A, C, W135 and Y vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0296",
      "display" : "MENPOVAX 4 A+C+Y+W135",
      "target" : [{
        "code" : "871873006",
        "display" : "Meningitis A, C, W135 and Y vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0297",
      "display" : "MENPOVAX A+C",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0298",
      "display" : "MERUVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0299",
      "display" : "MERUVAX II",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0300",
      "display" : "MEVILIN-L",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0301",
      "display" : "MMR",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0303",
      "display" : "MONIARIX",
      "target" : [{
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0304",
      "display" : "MOPAVAC SEVAC",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0305",
      "display" : "MOPV",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0306",
      "display" : "MORBILVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0307",
      "display" : "MORUBEL",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0309",
      "display" : "MORUPAR",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0310",
      "display" : "MOVIVAC",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0311",
      "display" : "MUMATEN BERNA PRODUCTSNA",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0312",
      "display" : "MUMPS LIVE",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0315",
      "display" : "MUMPSVAX",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0318",
      "display" : "NOTHAV",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0319",
      "display" : "OMNIHIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0321",
      "display" : "ORIMUNE",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0322",
      "display" : "PARIORIX",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0323",
      "display" : "PAVIVAC-SEVAC",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0325",
      "display" : "PEDIARIX",
      "target" : [{
        "code" : "871891001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B and inactivated whole Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0326",
      "display" : "PEDVAXHIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0327",
      "display" : "PENTA",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0328",
      "display" : "PENTACEL",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0330",
      "display" : "PENTACT-HIB",
      "target" : [{
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0332",
      "display" : "PENTAVALENTE",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0334",
      "display" : "PFIZER VAX-MEASLES L",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0335",
      "display" : "PLUSERIX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0336",
      "display" : "PNEUMOVAX",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0337",
      "display" : "PNU-IMUNE 23",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0338",
      "display" : "POLIACEL",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0341",
      "display" : "PREVNAR",
      "target" : [{
        "code" : "1052328007",
        "display" : "Pneumococcal 4, 6B, 9V, 14, 18C, 19F, and 23F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0343",
      "display" : "ProHIBiT",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0346",
      "display" : "PURIVAX",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0347",
      "display" : "QUADRACEL",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0348",
      "display" : "QUADRACEL/HIBEST",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0349",
      "display" : "QUADRIGEN",
      "target" : [{
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0350",
      "display" : "QUATRO-VIRELON",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0351",
      "display" : "QUINTUPLE",
      "target" : [{
        "code" : "2081000221102",
        "display" : "Diphtheria toxoid, Haemophilus influenzae type b conjugate, hepatitis B surface antigen, acellular pertussis and tetanus toxoid pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0352",
      "display" : "R-HB VACCINE",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0353",
      "display" : "R-VAC",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0354",
      "display" : "RA27/3",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0355",
      "display" : "RABAVERT",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0356",
      "display" : "RECOMBIVAX HB PÉDIATRIQUE",
      "target" : [{
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0359",
      "display" : "RIMEVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0360",
      "display" : "RIMPARIX",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0361",
      "display" : "RIT - LM-2",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0362",
      "display" : "RIT - LM-3",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0363",
      "display" : "ROTASHIELD",
      "target" : [{
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0364",
      "display" : "RUBEATEN BERNA PRODUCTS",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0365",
      "display" : "RUBELLA VACCINE MICROGEN",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0366",
      "display" : "RUBELLA-KOVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0367",
      "display" : "RUBELLOVAC",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0368",
      "display" : "RUBELOGEN",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0369",
      "display" : "RUBEOVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0370",
      "display" : "RVA RABIES VACCINE ABSORBED BIOPORT",
      "target" : [{
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0371",
      "display" : "POLIO SABIN GSK",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0372",
      "display" : "SAHIA",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0373",
      "display" : "SALK",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0374",
      "display" : "SANDOVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0376",
      "display" : "SHANCHOL",
      "target" : [{
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0377",
      "display" : "TRIPLE ANTIGEN SII",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0379",
      "display" : "T-IMMUN",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0383",
      "display" : "ANATOXAL TE",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0384",
      "display" : "TE/VAC/PTAP",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0385",
      "display" : "TELVACLPTAP",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0386",
      "display" : "TETAMYN",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0387",
      "display" : "TETANOL",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0388",
      "display" : "TETASORBAT SSW",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0389",
      "display" : "TETAMUN SSW",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0390",
      "display" : "TETRACT-HIB",
      "target" : [{
        "code" : "2071000221100",
        "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0391",
      "display" : "TETRAMUNE",
      "target" : [{
        "code" : "2071000221100",
        "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0392",
      "display" : "TETRAVAX",
      "target" : [{
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0393",
      "display" : "TICE BCG",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0395",
      "display" : "TITIFICA",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0396",
      "display" : "BIOPOLIO",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0397",
      "display" : "TRESIVAC LYOPHILIZED",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0398",
      "display" : "TRI-IMMUNOL",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0399",
      "display" : "TRIACEL",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0400",
      "display" : "TRIACELLUVAX",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0401",
      "display" : "TRIHIBIT",
      "target" : [{
        "code" : "318341000221109",
        "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0403",
      "display" : "TRINIVAC",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0404",
      "display" : "TRIPACEL",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0405",
      "display" : "TRIPEDIA",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0407",
      "display" : "TRIPLE",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0408",
      "display" : "TRIPLE ANTIGEN",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0409",
      "display" : "TRIPLE SABIN",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0410",
      "display" : "TRIPLE VIRAL",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0411",
      "display" : "TRIVACUNA LETI",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0412",
      "display" : "TRIVAX",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0413",
      "display" : "TRIVAX-AD",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0414",
      "display" : "TRIVAX-HIB",
      "target" : [{
        "code" : "318341000221109",
        "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0415",
      "display" : "TRIVB",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0416",
      "display" : "TRIVIRATEN",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0417",
      "display" : "TRIVIVAC SEVAC",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0418",
      "display" : "TRIVIVAC Y",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0419",
      "display" : "SHANTT",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0420",
      "display" : "BIO-TT",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0421",
      "display" : "TUSSITRUPIN FORTE",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0423",
      "display" : "TWINRIX JUNIOR",
      "target" : [{
        "code" : "1296753004",
        "display" : "Paediatric vaccine inactivated whole Hepatitis A and Hepatitis B surface antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "121000221105",
        "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871803007",
        "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0425",
      "display" : "TYNE",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0426",
      "display" : "TYPHOID VACCINE WYETH",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0427",
      "display" : "TYPHOID-KOVAX",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0429",
      "display" : "VACCIN COMBINAT DIFTERO-TETANIC",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0430",
      "display" : "VACCIN DIFTERIC ADSORBIT",
      "target" : [{
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0431",
      "display" : "VACCINUM MORBILLORUM VIVUM",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0432",
      "display" : "VACINA DUPLA",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0433",
      "display" : "VACINA TRIPLICE",
      "target" : [{
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0434",
      "display" : "VACINA TRIPLICE VIRAL",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0435",
      "display" : "VAKSIN CACAR",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0436",
      "display" : "VAKSIN CAMPAK KERING",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0438",
      "display" : "VAKSIN SERAP",
      "target" : [{
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0439",
      "display" : "VAMOAVAX",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0441",
      "display" : "SKYVARICELLA INJ",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0443",
      "display" : "SEVAC VARIE",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0444",
      "display" : "VAXEM-HIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0445",
      "display" : "VAXIPAR",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0446",
      "display" : "VCDT",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0447",
      "display" : "VDA VACCIN DIFTERIC ADSORBIT",
      "target" : [{
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0448",
      "display" : "VICPS (TYPHIM VI)",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0449",
      "display" : "VIRELON T 20",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0450",
      "display" : "VIROVAC MASSLING, PEROTID, RUBELLA",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0451",
      "display" : "VIVOTIF",
      "target" : [{
        "code" : "971000221109",
        "display" : "Live attenuated Salmonella enterica subspecies enterica serovar Typhi antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0452",
      "display" : "VT (VACINA TRIPLICE)",
      "target" : [{
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0453",
      "display" : "VTV (VACINA TRIPLICE VIRAL)",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0454",
      "display" : "VVR CANTACUZINO",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0456",
      "display" : "WELLTRIVAX TRIVALENTE",
      "target" : [{
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0457",
      "display" : "YF-VAX",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0459",
      "display" : "ZAANTITE",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0460",
      "display" : "ZADITEADVAX",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0461",
      "display" : "ZADITEVAX",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0462",
      "display" : "ZAMEVAX A+C",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0463",
      "display" : "ZAMOVAX",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0464",
      "display" : "ZAMRUVAX",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0465",
      "display" : "ZARUVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0466",
      "display" : "ZATETRAVAX",
      "target" : [{
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0467",
      "display" : "ZATEVAX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0468",
      "display" : "ZATRIBAVAX",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0469",
      "display" : "ZATRIVAX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0470",
      "display" : "QUINVAXEM",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0471",
      "display" : "HEPAVAX-GENE B 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0472",
      "display" : "PREPANDRIX",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0473",
      "display" : "PRE-PANDEMIC INFLUENZA VACCINE H5N1",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0474",
      "display" : "DARONRIX",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0475",
      "display" : "FOCLIVIA",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0476",
      "display" : "PANDEMIC INFLUENZA VACCINE H5N1 BAXTER",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0477",
      "display" : "PUMARIX",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0478",
      "display" : "COVAXIS",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0479",
      "display" : "TRIAXIS",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0480",
      "display" : "FENDRIX",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0481",
      "display" : "TRIVIVAX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0482",
      "display" : "VEPACEL",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0483",
      "display" : "FLUAD PAEDIATRICS",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0484",
      "display" : "RABIVAX-S",
      "target" : [{
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0486",
      "display" : "NIMENRIX",
      "target" : [{
        "code" : "1971000221105",
        "display" : "Meningococcus A, C, W135 and Y capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871916006",
        "display" : "Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0487",
      "display" : "MENHIBRIX",
      "target" : [{
        "code" : "1119351006",
        "display" : "Haemophilus influenzae type b and Neisseria meningitidis serogroup C and Y antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0488",
      "display" : "PENTAXIM",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0489",
      "display" : "TRIMOVAX",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0490",
      "display" : "KINRIX",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0491",
      "display" : "TENIVAC",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0492",
      "display" : "AFLURIA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0494",
      "display" : "TRITANRIX HepB",
      "target" : [{
        "code" : "1156879008",
        "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0495",
      "display" : "BEXSERO",
      "target" : [{
        "code" : "1981000221108",
        "display" : "Meningococcus serogroup B vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0504",
      "display" : "INFANRIX POLIO HIB NOURRISSONS",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0505",
      "display" : "HIBEST",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0507",
      "display" : "HEXACIMA",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0508",
      "display" : "JEEV 3 µg",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0509",
      "display" : "BIKEN",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0510",
      "display" : "HEXYON",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0511",
      "display" : "SILGARD",
      "target" : [{
        "code" : "2001000221108",
        "display" : "Human papillomavirus 6, 11, 16 and 18 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0513",
      "display" : "HEPATYRIX",
      "target" : [{
        "code" : "871804001",
        "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0514",
      "display" : "ROTARIX",
      "target" : [{
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0515",
      "display" : "INFANRIX-POLIO",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0516",
      "display" : "ABHAYRAB",
      "target" : [{
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0517",
      "display" : "FLUARIXTETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0518",
      "display" : "STAMARIL (multidose)",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0520",
      "display" : "IMVANEX",
      "target" : [{
        "code" : "1293025000",
        "display" : "Modified Vaccinia virus Ankara antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0521",
      "display" : "FLUENZ TETRA",
      "target" : [{
        "code" : "1010313002",
        "display" : "Live attenuated Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0523",
      "display" : "GARDASIL 9",
      "target" : [{
        "code" : "1209197008",
        "display" : "Human papillomavirus 6, 11, 16, 18, 31, 33, 45, 52 and 58 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0524",
      "display" : "TEVAX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0525",
      "display" : "INFANRIX PENTA",
      "target" : [{
        "code" : "871891001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Hepatitis B and inactivated whole Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0527",
      "display" : "VACCIN DIPHTERIQUE ET TETANIQUE ADSORBE",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0529",
      "display" : "IMOVAX TETANO",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0530",
      "display" : "TETANOL PUR",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0531",
      "display" : "TETANOS ADSORBE MERIEUX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0532",
      "display" : "TETANUS VACCIN",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0534",
      "display" : "MENJUGATE 10 µg",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0535",
      "display" : "VAXELIS",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0538",
      "display" : "VACCIN BCG BIOMED-LUBLIN",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0539",
      "display" : "DENGVAXIA",
      "target" : [{
        "code" : "840563003",
        "display" : "Dengue virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871720004",
        "display" : "Dengue virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0540",
      "display" : "IPAD T",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0541",
      "display" : "BOOSTRIX",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0542",
      "display" : "Vaccin D.T.P. Pasteur",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0543",
      "display" : "HEXAXIM",
      "target" : [{
        "code" : "1162634005",
        "display" : "Acellular Bordetella pertussis, Clostridium tetani toxoid, Corynebacterium diphtheriae toxoid, Haemophilus influenzae type b conjugated, Hepatitis B virus and inactivated Human poliovirus antigens only pediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162637003",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2101000221107",
        "display" : "Diphtheria and acellular pertussis and Haemophilus influenzae type b and hepatitis B and poliomyelitis and tetanus pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0544",
      "display" : "TETRAXIM",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0545",
      "display" : "EUVAX B 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0546",
      "display" : "DULTAVAX",
      "target" : [{
        "code" : "871838009",
        "display" : "Low dose diphtheria and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0554",
      "display" : "PEDIACEL",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0555",
      "display" : "COMBACT-HIB",
      "target" : [{
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0556",
      "display" : "MENITORIX",
      "target" : [{
        "code" : "836500008",
        "display" : "Haemophilus influenzae type b and Neisseria meningitidis serogroup C antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0560",
      "display" : "VAXIGRIPTETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0561",
      "display" : "IMOJEV",
      "target" : [{
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0562",
      "display" : "INFLUVAC TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0563",
      "display" : "ALPHA-RIX-TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0566",
      "display" : "PNEUMOCOCCAL POLYSACCHARIDE VACCINE MSD",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0567",
      "display" : "SHINGRIX",
      "target" : [{
        "code" : "1156183006",
        "display" : "Recombinant Varicella-zoster glycoprotein E vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0568",
      "display" : "BOOSTRIX-POLIO",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0569",
      "display" : "INFANRIX-IPV",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0570",
      "display" : "HIBERIX",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0573",
      "display" : "AGRIFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0574",
      "display" : "Td POLIO ADSORBED",
      "target" : [{
        "code" : "871838009",
        "display" : "Low dose diphtheria and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0575",
      "display" : "FSME-IMMUN",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0576",
      "display" : "FLUVIRAL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0577",
      "display" : "TRIPACEL HYBRID",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0578",
      "display" : "INFANRIX-HIB",
      "target" : [{
        "code" : "318341000221109",
        "display" : "Diphtheria toxoid and Haemophilus influenzae type b conjugate and acellular pertussis and tetanus toxoid pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0582",
      "display" : "TRUMENBA",
      "target" : [{
        "code" : "1981000221108",
        "display" : "Meningococcus serogroup B vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0586",
      "display" : "ERVEBO",
      "target" : [{
        "code" : "45891000087103",
        "display" : "Live attenuated Zaire ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836421005",
        "display" : "Ebolavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871721000",
        "display" : "Ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0590",
      "display" : "VACCIN BCG AJVACCINES",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0591",
      "display" : "VIVAXIM",
      "target" : [{
        "code" : "871804001",
        "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0592",
      "display" : "SPEEDA",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0593",
      "display" : "VERORAB",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0594",
      "display" : "MENQUADFI",
      "target" : [{
        "code" : "1971000221105",
        "display" : "Meningococcus A, C, W135 and Y capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871916006",
        "display" : "Neisseria meningitidis serogroup A, C, W135 and Y capsular oligosaccharide conjugated antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0595",
      "display" : "FLUCELVAX TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0603",
      "display" : "COMVAC3",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0611",
      "display" : "SHAN-5",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0612",
      "display" : "DTP-vax FINLAY",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0613",
      "display" : "BORYUNG DTap VACCINE",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0614",
      "display" : "TDAPBOOSTER AJ VACCINES",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0615",
      "display" : "VACCIN T.P. PASTEUR",
      "target" : [{
        "code" : "871816007",
        "display" : "Poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0620",
      "display" : "IXCHIQ",
      "target" : [{
        "code" : "1345036005",
        "display" : "Vaccine product containing only live attenuated Chikungunya virus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "1345042009",
        "display" : "Chikungunya virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1345202008",
        "display" : "Chikungunya virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0621",
      "display" : "MENC VACCINE FUNED",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0622",
      "display" : "EOLARIX",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0624",
      "display" : "M-M-Vax",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0625",
      "display" : "MORATEN",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0626",
      "display" : "MoRu Viraten",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0627",
      "display" : "MORUMAN",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0628",
      "display" : "Immravax",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0631",
      "display" : "MENINVACTKIT",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0632",
      "display" : "OPVERO",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0633",
      "display" : "ZABDENO",
      "target" : [{
        "code" : "45891000087103",
        "display" : "Live attenuated Zaire ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836421005",
        "display" : "Ebolavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871721000",
        "display" : "Ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0634",
      "display" : "MVABEA",
      "target" : [{
        "code" : "45891000087103",
        "display" : "Live attenuated Zaire ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836421005",
        "display" : "Ebolavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871721000",
        "display" : "Ebolavirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0635",
      "display" : "PREFLUCEL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0636",
      "display" : "FLUMIST QUADRIVALENT",
      "target" : [{
        "code" : "1010313002",
        "display" : "Live attenuated Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0637",
      "display" : "IPAD DT",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0638",
      "display" : "IPAD POLIO",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0639",
      "display" : "ADACEL POLIO",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0640",
      "display" : "TRITANRIX HepB+Hib",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0642",
      "display" : "FLUZONE HIGH-DOSE QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0644",
      "display" : "QDENGA",
      "target" : [{
        "code" : "840563003",
        "display" : "Dengue virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871720004",
        "display" : "Dengue virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0645",
      "display" : "IMMU ORR",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0646",
      "display" : "CECOLIN",
      "target" : [{
        "code" : "1991000221106",
        "display" : "Human papillomavirus 16 and 18 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0647",
      "display" : "ROTASIIL",
      "target" : [{
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0649",
      "display" : "EFLUELDA TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0650",
      "display" : "VAXZEVRIA ASTRAZENECA",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0651",
      "display" : "CORONAVAC COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0652",
      "display" : "CONVIDECIA",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0656",
      "display" : "SPIKEVAX 0,2 mg/mL MODERNA",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0657",
      "display" : "SINOPHARM WUHAN COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0658",
      "display" : "COMIRNATY 30 µg BIONTECH-PFIZER",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0659",
      "display" : "ZIFIVAX ANHUI COVID-19 VACCINE",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0660",
      "display" : "CHINESE-IMB-INACTIVATED-COVID",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0661",
      "display" : "INOVIO-DNA-COVID",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0662",
      "display" : "OSAKA-DNA-COVID / AG0301-COVID19",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0663",
      "display" : "CADILA-DNA-COVID",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0664",
      "display" : "GX-19-DNA-Covid",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0665",
      "display" : "COVAXIN BHARAT BIOTECH COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0666",
      "display" : "JCOVDEN (ancien nom : JANSSEN COVID-19 VACCINE)",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0667",
      "display" : "NUVAXOVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0668",
      "display" : "KENTUCKY-RBD-COVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0669",
      "display" : "ARCTURUS-RNA-COVID",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0670",
      "display" : "SPOUTNIK V",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0671",
      "display" : "CLOVER-SPIKE-SCB-2019-COVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0672",
      "display" : "VAXINE-SPIKE-COVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0673",
      "display" : "QUEENSLAND-SPIKE-MF59-COVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0674",
      "display" : "PASTEUR-MSD MEASLES VECTOR COVID",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0675",
      "display" : "IMPERIAL-COLLEGE-RNA-COVID",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0676",
      "display" : "CUREVAC-RNA-COVID",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0677",
      "display" : "CHINESE-PLA-ARN-Covid",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0678",
      "display" : "Medicago-VLP-Covid",
      "target" : [{
        "code" : "30141000087107",
        "display" : "COVID-19 virus-like particle antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0679",
      "display" : "MEDIGEN-S-2P-CpH1018-COVID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0680",
      "display" : "COVILO SINOPHARM COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0681",
      "display" : "GRAD-COV2 COVID-19 VACCINE REITHERA",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0682",
      "display" : "FLUQUADRI",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0683",
      "display" : "EPIVACCORONA",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0684",
      "display" : "QAZVAC",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0685",
      "display" : "VIDPREVTYN BETA",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0686",
      "display" : "MULTI-PEPTIDE-pVAC-COVID",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0687",
      "display" : "UB-612 COVID-19 Vaccine",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0688",
      "display" : "INTRANASAL FLU-BASED RBD DelNS1-2019-nCoV-RBD-OPT1 COVID-19 Vaccine",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0689",
      "display" : "CHINESE-RECOMBINANT-Sf9-COVID",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0690",
      "display" : "CHINESE-AD5-NCOV-COVID",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0691",
      "display" : "FINLAY-FR-1",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0692",
      "display" : "COVAXX",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0693",
      "display" : "VXA-COV2-1-COVID",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0694",
      "display" : "LMU-MVA-SARS-2-S-COVID",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0695",
      "display" : "RBD-HBsAg-VLPs-Covid",
      "target" : [{
        "code" : "30141000087107",
        "display" : "COVID-19 virus-like particle antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0696",
      "display" : "KCONVAC MINHAI COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0697",
      "display" : "V590 (COVID-19)",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0698",
      "display" : "hAd5-COVID-19",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0699",
      "display" : "IIBR's RECOMBINANT VSV-DeltaG-spike VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0701",
      "display" : "BACTRL-SPIKE",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0702",
      "display" : "RRBD PRODUCED IN CHO-CELL CHEMICALLY CONJUGATE TO TETANUS TOXOID",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0703",
      "display" : "ADJUVANTED PROTEIN SUBUNIT (RBD)",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0705",
      "display" : "INFLUSPLIT TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0706",
      "display" : "FLUZONE QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0707",
      "display" : "CORONAVIRUS SARS-CoV-2 INACTIVÉ",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0708",
      "display" : "CORVAX12",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0709",
      "display" : "COVI-VAC",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0710",
      "display" : "COVID-19 mRNA VACCINE BNT162b2",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0714",
      "display" : "VACCIN CONTRE LA COVID-19 (INACTIVE, AVEC ADJUVANT) VALNEVA",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0715",
      "display" : "ERUCOV-VAC",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0716",
      "display" : "SARS-COV-2-RBD-FC FUSION PROTEIN",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0717",
      "display" : "CIGB-669",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0718",
      "display" : "CIGB-66",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0719",
      "display" : "NANOCOVAX",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0720",
      "display" : "S-268019",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0721",
      "display" : "ADIMRSC-2F",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0722",
      "display" : "COVIGENIX VAX-001",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0723",
      "display" : "GLS-5310",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0724",
      "display" : "CHULACOV19",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0725",
      "display" : "COH04S1",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0726",
      "display" : "ADCOVID",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0727",
      "display" : "ADCLD-COV19",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0728",
      "display" : "aAPC COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0729",
      "display" : "LV-SMENP-DC vaccine",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0730",
      "display" : "DENDRITIC CELL AV-COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0731",
      "display" : "DITANRIX",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0732",
      "display" : "COVAC-1 - COVAC-2",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0733",
      "display" : "HEPLISAV-B",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0734",
      "display" : "POLIO BOOSTRIX",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0735",
      "display" : "POLIOINFANRIX",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0736",
      "display" : "TRIAXIS POLIO",
      "target" : [{
        "code" : "871894009",
        "display" : "Low dose diphtheria and acellular pertussis and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0737",
      "display" : "GBP510",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0739",
      "display" : "RAZI COV PARS",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0740",
      "display" : "PTX-COVID19-B",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0741",
      "display" : "COVID-EVAX",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0742",
      "display" : "COVIGEN",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0743",
      "display" : "BBV154",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0744",
      "display" : "COVID-19 INACTIVATED VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0745",
      "display" : "MF59 ADJUVANTED SARS-CoV-2 SCLAMP VACCINE",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0752",
      "display" : "COVISHIELD",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0753",
      "display" : "INACTIVATED SARS-COV-2 VACCINE FAKHRAVAC (MIVAC)",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0754",
      "display" : "INACTIVATED KOCAK-19 INAKTIF ADJUVANT COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0755",
      "display" : "ADJUVANTED INACTIVATED VACCINE AGAINST SARS-CoV-2",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0756",
      "display" : "MV-014-212",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0757",
      "display" : "NBP 2001",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0758",
      "display" : "SPFN COVID 19 VACCINE + AFLQ",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0759",
      "display" : "EUCORVAC-19",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0760",
      "display" : "RECOV",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0761",
      "display" : "V-01",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0762",
      "display" : "COV2 SAM (LNP) VACCINE",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0763",
      "display" : "mRNA-1273.351",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0764",
      "display" : "MRT5500",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0765",
      "display" : "DS-5670a",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0766",
      "display" : "HDT-301",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0767",
      "display" : "ChAdV68 SAM-LNP rS-TCE GRITSTONE ONCOLOGY COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0768",
      "display" : "COVIVAC",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0769",
      "display" : "SC-Ad6-1",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0770",
      "display" : "NDV-HXP-S",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0771",
      "display" : "VBI-2902a",
      "target" : [{
        "code" : "30141000087107",
        "display" : "COVID-19 virus-like particle antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0772",
      "display" : "SARS-CoV-2 VLP Vaccine",
      "target" : [{
        "code" : "30141000087107",
        "display" : "COVID-19 virus-like particle antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0773",
      "display" : "ABNCoV2",
      "target" : [{
        "code" : "30141000087107",
        "display" : "COVID-19 virus-like particle antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0774",
      "display" : "FSME-IMMUN 0,25 mL",
      "target" : [{
        "code" : "1287338003",
        "display" : "Tick-borne encephalitis virus antigen only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0776",
      "display" : "TETRABIK",
      "target" : [{
        "code" : "318351000221106",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid and inactivated whole Human Poliovirus serotype 1, 2 and 3 antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871883005",
        "display" : "Diphtheria and acellular pertussis and poliomyelitis and tetanus paediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0777",
      "display" : "ADJUPANRIX",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0778",
      "display" : "VAXCHORA",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0779",
      "display" : "BATREVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0780",
      "display" : "VAXNEUVANCE",
      "target" : [{
        "code" : "1252708008",
        "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 9V, 14, 18C, 19A, 19F, 22F, 23F, and 33F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0781",
      "display" : "RABIVAC",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0782",
      "display" : "RASILVAX",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0783",
      "display" : "R-COVI",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0784",
      "display" : "PERTAGEN",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0785",
      "display" : "BOOSTAGEN",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0786",
      "display" : "PREVNAR 20",
      "target" : [{
        "code" : "1252709000",
        "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 8, 9V, 10A, 11A, 12F, 14, 15B, 18C, 19A, 19F, 22F, 23F, 33F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0789",
      "display" : "COMVAC4",
      "target" : [{
        "code" : "1156879008",
        "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0793",
      "display" : "TETADIF",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0803",
      "display" : "Polio Sabin One and Three GSK",
      "target" : [{
        "code" : "1051000221104",
        "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0816",
      "display" : "PEDATYPH",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0826",
      "display" : "MEASLES AND RUBELLA VACCINE SII",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0833",
      "display" : "COMIRNATY 10 µg BIONTECH-PFIZER",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0835",
      "display" : "FIOCRUZ COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0836",
      "display" : "FLUAD TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0837",
      "display" : "COVOVAX SII",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0838",
      "display" : "COVOVAX NOVAVAX",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0840",
      "display" : "ADDIGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0841",
      "display" : "INFLUVAC 0,25 mL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0842",
      "display" : "NEORABIS",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0843",
      "display" : "NOVIRAB",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0844",
      "display" : "VERORABVAX",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0845",
      "display" : "VACCIN POLIOMYELITIQUE ORAL PRODUIT SUR CELLULES VERO MERIEUX",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0846",
      "display" : "VACCIN POLIOMYELITIQUE ORAL BIVALENT TYPES 1 et 3",
      "target" : [{
        "code" : "1051000221104",
        "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0847",
      "display" : "VACCIN PNEUMOCOCCIQUE SARBACH",
      "target" : [{
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0848",
      "display" : "VACCIN BCG INSTITUT MERIEUX",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0850",
      "display" : "NEISVAC-C",
      "target" : [{
        "code" : "871866001",
        "display" : "Neisseria meningitidis serogroup C only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "951000221102",
        "display" : "Meningococcus group C capsular polysaccharide conjugate vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0851",
      "display" : "POLIO SABIN MONO TWO (ORAL) GSK",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0868",
      "display" : "MENPOVAX A",
      "target" : [{
        "code" : "1252690003",
        "display" : "Meningococcus serogroup A vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0870",
      "display" : "TYPBAR",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0871",
      "display" : "SUPEMTEK TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0872",
      "display" : "INFLUPOZZI SUBUNITA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0873",
      "display" : "INFLUPOZZI ADIUVATO",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0874",
      "display" : "INNOFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0875",
      "display" : "PANDEMIC INFLUENZA VACCINE H5N1 ASTRAZENECA",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0876",
      "display" : "CINQUERIX",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0877",
      "display" : "INFANRIX HEPB",
      "target" : [{
        "code" : "1156879008",
        "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0878",
      "display" : "TRITANRIX",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0879",
      "display" : "ACELLUVAX",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0882",
      "display" : "CANDID 1",
      "target" : [{
        "code" : "1111000221101",
        "display" : "Live attenuated Argentinian haemorrhagic fever vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "860722004",
        "display" : "Junin virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0883",
      "display" : "ENTEROVACCINO TIFICO SCLAVO",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0884",
      "display" : "DIF-PER-TET-ALL CHIRON",
      "target" : [{
        "code" : "1297217008",
        "display" : "Pediatric acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0885",
      "display" : "INFLUPOZZI ZONALE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0886",
      "display" : "MONO OPV1",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0887",
      "display" : "POLIORAL",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0888",
      "display" : "QUATTVAXEM",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0889",
      "display" : "MONO OPV3",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0890",
      "display" : "NEOTYF",
      "target" : [{
        "code" : "971000221109",
        "display" : "Live attenuated Salmonella enterica subspecies enterica serovar Typhi antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0891",
      "display" : "PNEUMOPUR",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0892",
      "display" : "POLIOVAX-IN",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0893",
      "display" : "VACCINO ANTICOLERICO SCLAVO",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0900",
      "display" : "PREVENAR 20",
      "target" : [{
        "code" : "1252709000",
        "display" : "Pneumococcal 1, 3, 4, 5, 6A, 6B, 7F, 8, 9V, 10A, 11A, 12F, 14, 15B, 18C, 19A, 19F, 22F, 23F, 33F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0913",
      "display" : "BIMERVAX",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0924",
      "display" : "FLUZONE INTRADERMAL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0926",
      "display" : "FLUCELVAX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0930",
      "display" : "AD5-NCOV COVID-19 INHALATION VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0931",
      "display" : "FLUBLOK QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0933",
      "display" : "TICOVAC 2,7µg",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0934",
      "display" : "VACCIN OREILLONS AVENTIS PASTEUR MSD",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0935",
      "display" : "VACCIN RABIQUE INACTIVE MERIEUX",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0936",
      "display" : "VACCIN PNEUMOCOCCIQUE POLYOSIDIQUE AVENTIS PASTEUR MSD",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0939",
      "display" : "PREHEVBRIO",
      "target" : [{
        "code" : "1296678009",
        "display" : "3 antigen Hepatitis B recombinant surface only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0940",
      "display" : "SPUTNIK-LIGHT",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0946",
      "display" : "TYPHIDRALL",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0947",
      "display" : "IMMU-PHILUS",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0948",
      "display" : "BACITHRAX",
      "target" : [{
        "code" : "860818003",
        "display" : "Bacillus anthracis antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836384003",
        "display" : "Bacillus anthracis antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0949",
      "display" : "IMOVAX BCG",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0950",
      "display" : "IMOVAX DTP",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0951",
      "display" : "IMOVAX POLIO ORALE",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0952",
      "display" : "IMOVAX COLERA",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0953",
      "display" : "PROCOMVAX",
      "target" : [{
        "code" : "871806004",
        "display" : "Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0954",
      "display" : "JAPANESE ENCEPHALITIS VACCINE",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0955",
      "display" : "PULMOVAX",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0956",
      "display" : "VACCINO COLERICO BERNA",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0957",
      "display" : "VACCINO BCG BERNA",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0958",
      "display" : "ADIUGRIP",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0959",
      "display" : "STREPTOPUR",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0960",
      "display" : "VIATIM",
      "target" : [{
        "code" : "871804001",
        "display" : "Hepatitis A virus and Salmonella enterica subspecies enterica serovar Typhi antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0961",
      "display" : "ANATOXAL TE N",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0962",
      "display" : "ANATOXAL DI TE N ADULT",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0963",
      "display" : "ANATOXAL DI TE PER",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0964",
      "display" : "ANATOXAL DI",
      "target" : [{
        "code" : "871730008",
        "display" : "Low dose diphtheria vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0966",
      "display" : "JYNNEOS",
      "target" : [{
        "code" : "1293025000",
        "display" : "Modified Vaccinia virus Ankara antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0967",
      "display" : "HEPASOMA",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0968",
      "display" : "INFLEXAL V",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0969",
      "display" : "LYSSAVAC N BERNA",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0970",
      "display" : "TETATOX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0971",
      "display" : "VACCINO ANTIVAIOLOSO LANCY",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0972",
      "display" : "VIROFLUSOMA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0973",
      "display" : "VIROFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0974",
      "display" : "MENCEVAX AC",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0975",
      "display" : "PERTURIX",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0976",
      "display" : "VACCINO ANTICOLERICO ISI",
      "target" : [{
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0977",
      "display" : "ENTEROVACCINO ISI",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0978",
      "display" : "VAC.DIFTO TETANO ISI",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0979",
      "display" : "VACCINO ANTITETANICO ISI",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0980",
      "display" : "VAC.DPT ISI",
      "target" : [{
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0981",
      "display" : "VACCINO PERTOSSE ISI",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0982",
      "display" : "VACCINO TIFICO ISI",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0983",
      "display" : "VACCINO ANTIPOL ISI",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0984",
      "display" : "VACCINO ANTIVAIOLOSO ISI",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0986",
      "display" : "H ATETAL ISI",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0987",
      "display" : "TANRIX",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0988",
      "display" : "VACCINO MENINGOCOCCICO POLISACCARIDICO TETRAVALENTE GSK",
      "target" : [{
        "code" : "871873006",
        "display" : "Meningitis A, C, W135 and Y vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0990",
      "display" : "ALPHARIX",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0991",
      "display" : "FLULAVAL QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0992",
      "display" : "AFLURIA QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0993",
      "display" : "TD ADSORBED",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0994",
      "display" : "VARIVAX II",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0995",
      "display" : "IMVAMUNE",
      "target" : [{
        "code" : "1293025000",
        "display" : "Modified Vaccinia virus Ankara antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0996",
      "display" : "ACAM2000",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0998",
      "display" : "LC16",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0999",
      "display" : "WETVAX APSV",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1000",
      "display" : "VACV VACCINIA VIRUS LISTER ELSTREE",
      "target" : [{
        "code" : "1269346004",
        "display" : "Live attenuated Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290624003",
        "display" : "Variola virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1290625002",
        "display" : "Variola virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836389008",
        "display" : "Vaccinia virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871727001",
        "display" : "Vaccinia virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1002",
      "display" : "Q-VAX",
      "target" : [{
        "code" : "836397001",
        "display" : "Coxiella burnetii antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871723002",
        "display" : "Coxiella burnetii antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1003",
      "display" : "TEDIVAX PRO ADULTO",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1004",
      "display" : "TEDIVAX",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1005",
      "display" : "REVAC-B PLUS ADULT VACCINE",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1006",
      "display" : "SHANVAC B",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1007",
      "display" : "ISTIVAC4",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1008",
      "display" : "DITEMER",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1009",
      "display" : "TETAMER",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1010",
      "display" : "TRIAMER",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1011",
      "display" : "DITEKIBOOSTER",
      "target" : [{
        "code" : "2051000221107",
        "display" : "Adult acellular Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "462321000124107",
        "display" : "Low dose acellular Bordetella pertussis and Clostridium tetani and low dose Corynebacterium diphtheriae antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871876003",
        "display" : "Diphtheria and acellular pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1012",
      "display" : "PICOVAX",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1013",
      "display" : "FLUBLOK TRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1014",
      "display" : "PROVARIVAX",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1015",
      "display" : "COMBIVAX",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1016",
      "display" : "IDFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1017",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (50 µg/50 µg)/mL MULTIDOSE MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1018",
      "display" : "NOORA VACCINE",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1019",
      "display" : "SPIKEVAX 0,1 mg/mL MODERNA",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1020",
      "display" : "VACCIN HEPATITE A AVENTIS PASTEUR MSD",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1021",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.1 (15/15 µg) BIONTECH-PFIZER",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1022",
      "display" : "COMIRNATY 3 µg 6 MOIS-4 ANS BIONTECH-PFIZER",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1023",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.4-5 (15/15 µg) BIONTECH-PFIZER",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1024",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.4-5 (50 µg/50 µg)/mL MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1025",
      "display" : "CORBEVAX",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1026",
      "display" : "SOBERANA 02 FINLAY-FR-2 COVID-19 VACCINE",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1027",
      "display" : "KOVIVAC CHUMAKOV COVID-19 VACCINE",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1028",
      "display" : "RECOMBIVAX HB DIALYSÉ",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1029",
      "display" : "QUINTANRIX",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1030",
      "display" : "GEMCOVAC-19",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1031",
      "display" : "SPIKEVAX 50 µg MONODOSE MODERNA",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1032",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (25 µg/25 µg) MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1033",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.4-5 (5/5 µg) BIONTECH-PFIZER",
      "target" : [{
        "code" : "1287595003",
        "display" : "Pediatric vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1034",
      "display" : "HEBERBIOVAC B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1035",
      "display" : "HEBERBIOVAC HB 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1036",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.4-5 25 µg/25 µg MODERNA",
      "target" : [{
        "code" : "1287596002",
        "display" : "Adult vaccine product containing only severe acute respiratory syndrome coronavirus 2 encoding B lineage spike protein and BA.4/BA.5 lineage spike protein messenger ribonucleic acid",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1040",
      "display" : "AREXVY",
      "target" : [{
        "code" : "51311000087100",
        "display" : "RSV (respiratory syncytial virus) vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1045",
      "display" : "INFANRIX-IPV/HIB",
      "target" : [{
        "code" : "2091000221104",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871888001",
        "display" : "Acellular Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and inactivated Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1047",
      "display" : "ABRYSVO",
      "target" : [{
        "code" : "51311000087100",
        "display" : "RSV (respiratory syncytial virus) vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1048",
      "display" : "DECAVAC",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1049",
      "display" : "TDVAX",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1051",
      "display" : "PFIZER COMIRNATY-30 XBB.1.5",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1052",
      "display" : "PFIZER COMIRNATY-10 XBB.1.5",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1053",
      "display" : "PFIZER COMIRNATY-3 XBB.1.5",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1054",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.4-5 (1,5/1,5 µg)",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1055",
      "display" : "NUVAXOVID XBB.1.5",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1056",
      "display" : "R21/MATRIX-M",
      "target" : [{
        "code" : "45861000087106",
        "display" : "Plasmodium falciparum antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1057",
      "display" : "ENGERIX B JUNIOR",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1058",
      "display" : "SPIKEVAX XBB.1.5 0,1 mg/mL dose 50 µg MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1059",
      "display" : "SPIKEVAX XBB.1.5 0,1 mg/mL dose 25 µg MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1060",
      "display" : "SPIKEVAX XBB.1.5 50 µg MODERNA",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1070",
      "display" : "FLUZONE HIGH-DOSE QUADRIVALENT SOUTHERN HEMISPHERE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1074",
      "display" : "CYFENDUS",
      "target" : [{
        "code" : "860818003",
        "display" : "Bacillus anthracis antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836384003",
        "display" : "Bacillus anthracis antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1077",
      "display" : "ENVAX-A71",
      "target" : [{
        "code" : "51591000087104",
        "display" : "Vaccine product containing only Enterovirus A71 antigen",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1078",
      "display" : "ENVACGEN",
      "target" : [{
        "code" : "51591000087104",
        "display" : "Vaccine product containing only Enterovirus A71 antigen",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1080",
      "display" : "COVAXIN",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1085",
      "display" : "MYCOBAX",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1086",
      "display" : "PNEUMUNE",
      "target" : [{
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1090",
      "display" : "MENZB",
      "target" : [{
        "code" : "1981000221108",
        "display" : "Meningococcus serogroup B vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1094",
      "display" : "OROCHOL",
      "target" : [{
        "code" : "1011000221100",
        "display" : "Live attenuated Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1095",
      "display" : "MVA85A",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1096",
      "display" : "MORCVAX",
      "target" : [{
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1098",
      "display" : "XANAFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1101",
      "display" : "DOTARICIN",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1250",
      "display" : "EUVICHOL-S",
      "target" : [{
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1251",
      "display" : "EUVICHOL-PLUS",
      "target" : [{
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1252",
      "display" : "JE-CV",
      "target" : [{
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1253",
      "display" : "CHIMERIVAX-JE",
      "target" : [{
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1254",
      "display" : "CAPVAXIVE",
      "target" : [{
        "code" : "1360050007",
        "display" : "Pneumococcal 3, 6A, 7F, 8, 9N, 10A, 11A, 12F, 15A, deOAc15B (de-O-acetylated 15B), 16F, 17F, 19A, 20A, 22F, 23A, 23B, 24F, 31, 33F, 35B conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1258",
      "display" : "COMIRNATY JN.1 30 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1259",
      "display" : "COMIRNATY JN.1 10 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1260",
      "display" : "COMIRNATY JN.1 3 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1261",
      "display" : "NUVAXOVID JN.1",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1262",
      "display" : "MRESVIA",
      "target" : [{
        "code" : "51311000087100",
        "display" : "RSV (respiratory syncytial virus) vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1265",
      "display" : "CLODIVAC",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1267",
      "display" : "VIMKUNYA",
      "target" : [{
        "code" : "1345042009",
        "display" : "Chikungunya virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1345202008",
        "display" : "Chikungunya virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1268",
      "display" : "SPIKEVAX JN.1 50 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1269",
      "display" : "SPIKEVAX JN.1 0,1 mg/mL dose 25 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1270",
      "display" : "SPIKEVAX JN.1 0,1 mg/mL dose 50 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1273",
      "display" : "DT BIOMED",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1274",
      "display" : "d BIOMED",
      "target" : [{
        "code" : "871730008",
        "display" : "Low dose diphtheria vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1275",
      "display" : "D BIOMED",
      "target" : [{
        "code" : "836381006",
        "display" : "Corynebacterium diphtheriae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871729003",
        "display" : "Corynebacterium diphtheriae antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871830002",
        "display" : "Corynebacterium diphtheriae toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1276",
      "display" : "DTP BIOMED",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1278",
      "display" : "WALRINVAX",
      "target" : [{
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1281",
      "display" : "PENTABIO",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1282",
      "display" : "FLUBIO INFLUENZA HA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1283",
      "display" : "INDOVAC",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1284",
      "display" : "NUSAGARD",
      "target" : [{
        "code" : "2001000221108",
        "display" : "Human papillomavirus 6, 11, 16 and 18 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1285",
      "display" : "NOPV2 BIO FARMA",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1286",
      "display" : "VAKSIN COVID-19 BIO FARMA",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1287",
      "display" : "VAKSIN HEPATITIS B BIO FARMA",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1288",
      "display" : "VAKSIN POLIOMYELITIS BIO FARMA",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1289",
      "display" : "VAKSIN POLIOMYELITIS BIVALEN BIO FARMA",
      "target" : [{
        "code" : "1051000221104",
        "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1290",
      "display" : "MOPV1 BIO FARMA",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1291",
      "display" : "MOPV2 BIO FARMA",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1292",
      "display" : "BIO-TCV",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1293",
      "display" : "VAKSIN BCG KERING",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1294",
      "display" : "BIO-TD",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1295",
      "display" : "DT BIO FARMA",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1296",
      "display" : "DTP BIO FARMA",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1297",
      "display" : "TT BIO FARMA",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1298",
      "display" : "BETT",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1299",
      "display" : "BEVAC 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1300",
      "display" : "BEVAC 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1301",
      "display" : "BE Td",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1302",
      "display" : "COMBE FIVE",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1303",
      "display" : "VLA15",
      "target" : [{
        "code" : "840599008",
        "display" : "Borrelia burgdorferi antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871911001",
        "display" : "Borrelia burgdorferi antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1304",
      "display" : "BERAB",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1305",
      "display" : "MRBEV",
      "target" : [{
        "code" : "2231000221105",
        "display" : "Live attenuated Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871817003",
        "display" : "Measles morbillivirus and Rubella virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1306",
      "display" : "TYPHIBEV",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1307",
      "display" : "JEEV 6 µg",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1308",
      "display" : "DT BIOLOGICAL E LTD",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1309",
      "display" : "NOVEL ORAL (nOPV) TYPE 2 BIOLOGICAL E. LTD",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1310",
      "display" : "SII TD-VAC",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1312",
      "display" : "TT SII",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1313",
      "display" : "BCG SII",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1314",
      "display" : "MEASLES SII",
      "target" : [{
        "code" : "836382004",
        "display" : "Measles morbillivirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871765008",
        "display" : "Measles vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871766009",
        "display" : "Live attenuated Measles morbillivirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1315",
      "display" : "MUMPS SII",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1316",
      "display" : "RUBELLA SII",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1317",
      "display" : "CERVAVAC",
      "target" : [{
        "code" : "2001000221108",
        "display" : "Human papillomavirus 6, 11, 16 and 18 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1318",
      "display" : "DIPHTHERIA, TETANUS, PERTUSSIS AND HEPATITIS B SII",
      "target" : [{
        "code" : "1156879008",
        "display" : "Diphtheria and hepatitis B and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1319",
      "display" : "DIPHTHERIA, TETANUS, PERTUSSIS AND HAEMOPHILUS INFLUENZAE B SII",
      "target" : [{
        "code" : "2071000221100",
        "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1320",
      "display" : "DIPHTHERIA, TETANUS, PERTUSSIS, HEPATITIS B AND HAEMOPHILUS INFLUENZAE B SII",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1321",
      "display" : "HAEMOPHILUS INFLUENZAE B SII",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1322",
      "display" : "PNEUMOSIL",
      "target" : [{
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1324",
      "display" : "NASOVAC-S",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1325",
      "display" : "GENEVAC-B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1326",
      "display" : "GENEVAC-B 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1327",
      "display" : "HEPATITIS B SII",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1328",
      "display" : "TUBERVAC",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1329",
      "display" : "FLU-M",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1330",
      "display" : "FLU-M TETRA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1331",
      "display" : "CELLDEMIC",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1332",
      "display" : "COMIRNATY KP.2 3 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1333",
      "display" : "COMIRNATY KP.2 10 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1334",
      "display" : "COMIRNATY KP.2 30 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1335",
      "display" : "INCELLIPAN",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1336",
      "display" : "KOSTAIVE",
      "target" : [{
        "code" : "1287964002",
        "display" : "B lineage SARS-CoV-2 monovalent mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1337",
      "display" : "CONVACELL",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1338",
      "display" : "ZOONOTIC",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1339",
      "display" : "BIMERVAX XBB.1.16",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1340",
      "display" : "SPIKEVAX BA.1 0,1 mg/mL dose 50 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1342",
      "display" : "IPVAX",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1343",
      "display" : "BORYUNG CELL CULTURE-DERIVED JAPANESE ENCEPHALITIS VACCINE",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1344",
      "display" : "BORYUNG JAPANESE ENCEPHALITIS VACCINE",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1345",
      "display" : "ZEROTYPH",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1346",
      "display" : "FLU QUADRIVALENT MCV",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1347",
      "display" : "EFLUELDA",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1348",
      "display" : "TETANA",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1349",
      "display" : "TY BIOMED",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1350",
      "display" : "T SIS BIOMED",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1351",
      "display" : "TETANA PRO",
      "target" : [{
        "code" : "1101000221104",
        "display" : "Clostridium tetani toxoid antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2021000221101",
        "display" : "Tetanus toxoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "777725002",
        "display" : "Clostridium tetani toxoid antigen adsorbed only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "863911006",
        "display" : "Clostridium tetani antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871742003",
        "display" : "Tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1352",
      "display" : "TERATECT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1353",
      "display" : "IL-YANG FLU VACCINE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1354",
      "display" : "EUFORVAC",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1355",
      "display" : "EUPENTA",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1356",
      "display" : "EUVAX B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1357",
      "display" : "EUPOLIO",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1358",
      "display" : "SKYCELLFLU QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1359",
      "display" : "SKYCELLFLU TRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1360",
      "display" : "HEPAMUNE B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1361",
      "display" : "HEPAMUNE B 20 µg",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1362",
      "display" : "SK TD",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1363",
      "display" : "HEPAVAX-GENE B 10 µg",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1364",
      "display" : "BIOHIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1365",
      "display" : "COMVAC5",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1366",
      "display" : "HILLCHOL",
      "target" : [{
        "code" : "1001000221103",
        "display" : "Inactivated cholera vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "2181000221101",
        "display" : "Vibrio cholerae antigen only vaccine product in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836383009",
        "display" : "Vibrio cholerae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "991000221105",
        "display" : "Cholera vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1367",
      "display" : "HNVAC",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1368",
      "display" : "INCOVACC",
      "target" : [{
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1369",
      "display" : "INDIRAB",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1370",
      "display" : "JENVAC",
      "target" : [{
        "code" : "871725009",
        "display" : "Inactivated whole Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871825001",
        "display" : "Inactivated Japanese encephalitis virus adsorbed vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836378001",
        "display" : "Japanese encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871724008",
        "display" : "Japanese encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1371",
      "display" : "REVAC-B MCF",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1372",
      "display" : "ROTAVAC",
      "target" : [{
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1373",
      "display" : "ROTAVAC 5D",
      "target" : [{
        "code" : "1081000221109",
        "display" : "Live attenuated rotavirus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836387005",
        "display" : "Rotavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871761004",
        "display" : "Rotavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1374",
      "display" : "TYPBAR-TCV",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1376",
      "display" : "ZYCOV-D",
      "target" : [{
        "code" : "1187593009",
        "display" : "SARS-CoV-2 DNA plasmid encoding spike protein vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1377",
      "display" : "VAXIFLU-4",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1378",
      "display" : "VACTYPH",
      "target" : [{
        "code" : "2171000221104",
        "display" : "Typhoid polysaccharide vaccine in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "871755002",
        "display" : "Typhoid Vi capsular polysaccharide vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "961000221100",
        "display" : "Typhoid vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1379",
      "display" : "ZYVAC MMR",
      "target" : [{
        "code" : "2241000221103",
        "display" : "Live attenuated measles, mumps, and rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871831003",
        "display" : "Measles and mumps and rubella vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1380",
      "display" : "ZYVAC TCV",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1381",
      "display" : "MEASLES AND RUBELLA VACCINE ZYDUS",
      "target" : [{
        "code" : "1252703004",
        "display" : "Measles morbillivirus and Mumps orthorubulavirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1382",
      "display" : "SKYTYPHOID",
      "target" : [{
        "code" : "836390004",
        "display" : "Salmonella enterica subspecies enterica serovar Typhi antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1383",
      "display" : "CYVAC",
      "target" : [{
        "code" : "45861000087106",
        "display" : "Plasmodium falciparum antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1384",
      "display" : "BARYCELA",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1385",
      "display" : "GC FLU QUADRIVALENT",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1386",
      "display" : "GCFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1387",
      "display" : "SINSAVAC",
      "target" : [{
        "code" : "1121000221106",
        "display" : "Live attenuated Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836385002",
        "display" : "Yellow fever virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871717007",
        "display" : "Yellow fever virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1388",
      "display" : "BIVAC POLIO",
      "target" : [{
        "code" : "1051000221104",
        "display" : "Live attenuated poliovirus serotypes 1 and 3 vaccine in oral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1389",
      "display" : "INLIVE",
      "target" : [{
        "code" : "51591000087104",
        "display" : "Vaccine product containing only Enterovirus A71 antigen",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1390",
      "display" : "HEALIVE",
      "target" : [{
        "code" : "1010308001",
        "display" : "Inactivated whole Hepatitis A HM-175 strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1010318006",
        "display" : "Inactivated whole Hepatitis A GBM strain vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836375003",
        "display" : "Hepatitis A virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "91000221102",
        "display" : "Inactivated whole Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "865997008",
        "display" : "Hepatitis A virus antigen only adult vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871751006",
        "display" : "Hepatitis A virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1391",
      "display" : "BILIVE",
      "target" : [{
        "code" : "121000221105",
        "display" : "Inactivated hepatitis A and hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871803007",
        "display" : "Hepatitis A and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1392",
      "display" : "23-VALENT SINOVAC",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1393",
      "display" : "PROVARIX",
      "target" : [{
        "code" : "1010310004",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka-Merck strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1010322001",
        "display" : "Live attenuated Human alphaherpesvirus 3 Oka strain only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "2221000221107",
        "display" : "Live attenuated Human alphaherpesvirus 3 only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871919004",
        "display" : "Human alphaherpesvirus 3 antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1394",
      "display" : "POLIO SINOVAC VACCINE",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1395",
      "display" : "MUMPS SINOVAC VACCINE",
      "target" : [{
        "code" : "836498007",
        "display" : "Mumps orthorubulavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871737006",
        "display" : "Mumps orthorubulavirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871738001",
        "display" : "Live attenuated mumps vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1396",
      "display" : "ANFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1397",
      "display" : "PANFLU",
      "target" : [{
        "code" : "1003499009",
        "display" : "Influenza H5N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119279002",
        "display" : "Inactivated whole Influenza A virus subtype H5N1 antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1162629006",
        "display" : "Influenza A virus A/Indonesia/05/2005 (H5N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1398",
      "display" : "PANFLU.1",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1399",
      "display" : "TERTRANFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1400",
      "display" : "SHANIPV",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1401",
      "display" : "9-VALENT HPV VACCINE INNOVAX",
      "target" : [{
        "code" : "1209197008",
        "display" : "Human papillomavirus 6, 11, 16, 18, 31, 33, 45, 52 and 58 antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836379009",
        "display" : "Human papillomavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "911000221103",
        "display" : "Human papillomavirus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1402",
      "display" : "EASYSIX",
      "target" : [{
        "code" : "871895005",
        "display" : "Diphtheria and Haemophilus influenzae type b and hepatitis B and pertussis and poliomyelitis and tetanus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1403",
      "display" : "EASYFIVE-TT",
      "target" : [{
        "code" : "871886002",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Hepatitis B virus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1404",
      "display" : "EASYFOUR-TT",
      "target" : [{
        "code" : "2071000221100",
        "display" : "Whole cell Bordetella pertussis and Corynebacterium diphtheriae toxoid and Clostridium tetani toxoid and Haemophilus influenzae type b capsular polysaccharide conjugated antigens only pediatric vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871839001",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1405",
      "display" : "EASYFOURPOL",
      "target" : [{
        "code" : "871887006",
        "display" : "Bordetella pertussis and Clostridium tetani and Corynebacterium diphtheriae and Haemophilus influenzae type b and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1406",
      "display" : "SPUTNIK V",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1407",
      "display" : "NOVOHIB",
      "target" : [{
        "code" : "2041000221105",
        "display" : "Haemophilus influenzae type b capsular polysaccharide conjugated vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836380007",
        "display" : "Haemophilus influenzae type b antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871764007",
        "display" : "Haemophilus influenzae type b vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1408",
      "display" : "ENIVACHB",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1447",
      "display" : "VACCIN BCG SYNTHAVERSE",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1448",
      "display" : "BCG VACCINE MERCK",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1449",
      "display" : "DITANRIX-PEDIATRIC",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1450",
      "display" : "HEPACARE",
      "target" : [{
        "code" : "1296677004",
        "display" : "Hepatitis B high dose recombinant surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1451",
      "display" : "CHIROFLU",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1452",
      "display" : "SCI-B-VAC",
      "target" : [{
        "code" : "1296678009",
        "display" : "3 antigen Hepatitis B recombinant surface only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1453",
      "display" : "INVIVAC",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1455",
      "display" : "MENGIVAC A + C",
      "target" : [{
        "code" : "871871008",
        "display" : "Meningitis A and C vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1456",
      "display" : "WYVAC",
      "target" : [{
        "code" : "2191000221103",
        "display" : "Inactivated rabies vaccine grown in cellular line",
        "equivalence" : "equal"
      },
      {
        "code" : "1131000221109",
        "display" : "Vaccine product containing only inactivated whole Rabies lyssavirus antigen",
        "equivalence" : "equal"
      },
      {
        "code" : "836393002",
        "display" : "Rabies lyssavirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871726005",
        "display" : "Rabies vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1457",
      "display" : "TETRA-SOLGEN",
      "target" : [{
        "code" : "871878002",
        "display" : "Diphtheria and pertussis and poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1458",
      "display" : "TRIDIPIGEN",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1459",
      "display" : "TRINFAGEN N0.1",
      "target" : [{
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1460",
      "display" : "SOLGEN",
      "target" : [{
        "code" : "2061000221109",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid and Corynebacterium diphtheriae toxoid only paediatric vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "774618008",
        "display" : "Whole cell Bordetella pertussis and Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871875004",
        "display" : "Diphtheria and pertussis and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1461",
      "display" : "DIFTET",
      "target" : [{
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1462",
      "display" : "PNU-IMUNE 14",
      "target" : [{
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1463",
      "display" : "FREEZE-DRIED BCG VACCINE JAPAN",
      "target" : [{
        "code" : "1861000221106",
        "display" : "Bacillus Calmette-Guerin vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "319941000221104",
        "display" : "Live attenuated Mycobacterium bovis antigen only vaccine product in parenteral dose form",
        "equivalence" : "equal"
      },
      {
        "code" : "836402002",
        "display" : "Bacillus Calmette-Guerin antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1464",
      "display" : "FLUBRON VACCINE",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1466",
      "display" : "COMIRNATY LP.8.1 30 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1467",
      "display" : "COMIRNATY LP.8.1 3 µg 6 MOIS-4 ANS",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1468",
      "display" : "COMIRNATY LP.8.1 10 µg 5-11 ans",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1469",
      "display" : "mNEXSPIKE",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1477",
      "display" : "ENCEPUR N ENFANT",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1479",
      "display" : "VACPERTAGEN",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1480",
      "display" : "PNEUMOVAX 23",
      "target" : [{
        "code" : "1119220001",
        "display" : "Streptococcus pneumoniae Danish serotype 1, 2, 3, 4, 5, 6B, 7F, 8, 9N, 9V, 10A, 11A, 12F, 14, 15B, 17F, 18C, 19A, 19F, 20, 22F, 23F, and 33F capsular polysaccharide antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1481",
      "display" : "FLUVACCINOL",
      "target" : [{
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1483",
      "display" : "ENCEPUR N",
      "target" : [{
        "code" : "836403007",
        "display" : "Tick-borne encephalitis virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871719005",
        "display" : "Tick-borne encephalitis virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1484",
      "display" : "HEPRECOMB ENFANT",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1485",
      "display" : "GEN H-B-VAX 5",
      "target" : [{
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1486",
      "display" : "GEN H-B-VAX 10",
      "target" : [{
        "code" : "1296864005",
        "display" : "Paediatric Hepatitis B recombinant adsorbed surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1296676008",
        "display" : "Hepatitis B recombinant adsorbed surface antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1304283008",
        "display" : "Hepatitis B recombinant surface antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836374004",
        "display" : "Hepatitis B virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871822003",
        "display" : "Hepatitis B virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871925000",
        "display" : "Hepatitis B surface antigen vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1487",
      "display" : "PREVENAR-7",
      "target" : [{
        "code" : "1052328007",
        "display" : "Pneumococcal 4, 6B, 9V, 14, 18C, 19F, and 23F conjugate vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1801000221105",
        "display" : "Streptococcus pneumoniae capsular polysaccharide antigen conjugated only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836398006",
        "display" : "Streptococcus pneumoniae antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "981000221107",
        "display" : "Pneumococcal vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1488",
      "display" : "POLIORIX",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1489",
      "display" : "CELTURA",
      "target" : [{
        "code" : "1157356006",
        "display" : "Influenza A virus A/California/7/2009 (H1N1)-like virus strain split virion hemagglutinin antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871772009",
        "display" : "Influenza H1N1 vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1181000221105",
        "display" : "Influenza virus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "836377006",
        "display" : "Influenza virus antigen-containing vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1490",
      "display" : "ALMEVAX",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1491",
      "display" : "RUBEVAC",
      "target" : [{
        "code" : "1297215000",
        "display" : "Live attenuated rubella vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "836388000",
        "display" : "Rubella virus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871732000",
        "display" : "Rubella virus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1492",
      "display" : "POLIOMYELITIS IMPFSTOFF BERNA",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1493",
      "display" : "ACEL P",
      "target" : [{
        "code" : "601000221108",
        "display" : "Bordetella pertussis antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871758000",
        "display" : "Pertussis vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871759008",
        "display" : "Acellular Bordetella pertussis only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1494",
      "display" : "DITEBOOSTER",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1495",
      "display" : "POLIO KOPROWSKI K1-K2-K3",
      "target" : [{
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1496",
      "display" : "POLIO LILLY",
      "target" : [{
        "code" : "871740006",
        "display" : "Inactivated whole Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1031000221108",
        "display" : "Human poliovirus antigen-containing vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871739009",
        "display" : "Human poliovirus antigen only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1497",
      "display" : "TD-VIRELON",
      "target" : [{
        "code" : "871838009",
        "display" : "Low dose diphtheria and inactivated poliomyelitis and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871837004",
        "display" : "Clostridium tetani and Corynebacterium diphtheriae and Human poliovirus antigens only vaccine product",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1498",
      "display" : "EPIVACCORONA-N",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1499",
      "display" : "SPUTNIK-M",
      "target" : [{
        "code" : "29061000087103",
        "display" : "COVID-19 non-replicating viral vector vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1500",
      "display" : "SPIKEVAX LP.8.1 50 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1501",
      "display" : "SPIKEVAX LP.8.1 25 µg",
      "target" : [{
        "code" : "1119349007",
        "display" : "Severe acute respiratory syndrome coronavirus 2 mRNA only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1502",
      "display" : "BIMERVAX LP.8.1",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1504",
      "display" : "TD-PUR",
      "target" : [{
        "code" : "2031000221103",
        "display" : "Adult diphtheria and tetanus toxoids vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "871827009",
        "display" : "Low dose diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "775641005",
        "display" : "Clostridium tetani toxoid adsorbed and Corynebacterium diphtheriae toxoid antigens only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "871826000",
        "display" : "Diphtheria and tetanus vaccine",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1505",
      "display" : "SCTV01C",
      "target" : [{
        "code" : "1162643001",
        "display" : "Severe acute respiratory syndrome coronavirus 2 recombinant spike protein antigen only vaccine product",
        "equivalence" : "equal"
      },
      {
        "code" : "1119305005",
        "display" : "2019 novel coronavirus antigen vaccine",
        "equivalence" : "equal"
      },
      {
        "code" : "28531000087107",
        "display" : "COVID-19 vaccine",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
